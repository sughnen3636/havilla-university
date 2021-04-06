<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;
use App\Models\Newsletter;
use App\Mail\NewApplication;
use App\Models\Verification;
use App\Http\Controllers\UserController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;
use App\Models\User;

class AdmissionController extends Controller
{
    public function index()
    {
    	$title = 'Undergraduate admission';
	    return view('admission', compact('title'));
    }

    public function applyForm()
    {
    	$title = 'Havilla | Programme Application';
        $choosen = '';
    	return view('applyForm', compact('title','choosen'));
    }

    public function applyFromDept($choosen)
    {
        $title = 'Havilla | Programme Application';
        return view('applyForm', compact('title','choosen'));
    }

    public function storeProspect(Request $request)
    {
    	$this->validator($request);

        $user = UserController::addUser($request);

        $this->verifyEmail($user);
        
    	session()->flash('applied', 'Thank you <b>'.$request->f_name.' '.$request->l_name.'</b> for applying for one our programmes.<br>An email confirmation link has been sent to your inbox, please refer and confirm that your email is active and belongs to you.');

    	return redirect()->back();
    }

    public function validator(Request $request)
    {
        $rules = [
            'f_name'        => 'required|string',
            'l_name'        => 'required|string',
            'email'         => 'required|email|unique:users',
            'password'      => 'required|confirmed|min:5',
            'phone'     	=> 'required|numeric',
            'course'        => 'required|string',
        ];

        $message = [
            'f_name.required'        => 'The first name field is required',
            'f_name.string'          => 'Only text characters allowed for name fields',
            'l_name.required'        => 'The last name field is required',
            'l_name.string'          => 'Only text characters allowed for name fields',
        ];

        return $this->validate($request, $rules, $message);
    }

    private function verifyEmail(User $user)
    {
        $url = $this->generateVerifyCode($user);
        $name = $user->f_name.' '.$user->l_name;

        Mail::to($user->email)->send(new VerifyEmail($url, $name));
    }

    private function generateVerifyCode(User $user)
    {
        $code = Str::random(10);
        $base_url = env('APP_URL');

        $verifier = new Verification;
        $verifier->verification_code = $code;
        $verifier->user_id = $user->id;
        $verifier->save();

        return $base_url.'/admissions/verify?code='.$code.'&id='.$user->id;
    }

    public function sendToAdmin($prospect)
    {
        return Mail::to($prospect->email)->send(new NewApplication($prospect));
    }

    public function contactForm()
    {
    	$title = 'Havilla | Reach Us';
    	return view('contact', compact('title'));
    }

    public function newsletter(Request $request)
    {
    	$newsletter = New Newsletter;
    	$newsletter->email = $request->email;
    	$newsletter->save();

    	return true;
    }

    public function uploadDoc(Request $request)
    {
        $validator = $this->validateZipUpload($request);

        $file=$request->file('documents');
        $name=$file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $request->documents->move(public_path('assets/documents'), $name);

        $user = auth()->user();
        $user->doc_name = $name;
        $user->save();

        session()->flash('uploaded', 'File uploaded');

        return redirect()->back();
    }

    public function validateZipUpload(Request $request)
    {
        $rules = [
            'documents' => 'required|file|mimes:zip'
        ];

        return $this->validate($request, $rules);
    }
}
