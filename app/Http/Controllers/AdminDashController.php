<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BOT;
use App\Models\User;

class AdminDashController extends Controller
{
    public function index()
    {
    	$title = 'HUNI | Admin Dashboard';
    	return view('dash.admin.index', compact('title'));
    }

    public function addBOT()
    {
    	$title = 'Add Board of Trustee Member';
    	return view('dash.admin.addStaff', compact('title'));
    }

    public function storeBOT(Request $request)
    {
    	$this->validator($request);

    	// $file=$request->file('img');
     //    $name=$file->getClientOriginalName();
     //    $extension = $file->getClientOriginalExtension();
     //    $request->img->move(public_path('assets/imgages/staff'), $name);

    	$imageName = time().'.'.$request->file('img')->extension();  
        $request->img->move(public_path('assets/images/staff'), $imageName);

        BOT::create( array_merge($request->all(), ['img' => $imageName]) );
        session()->flash('success','Staff Added');
        return redirect()->route('bots');
    }

    public function validator(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'img'  => 'required',
            'bio'  => 'required|string',
        ];

        return $this->validate($request, $rules);
    }

    public function allBOTS()
    {
    	$title = 'All Board of Trustees Members';
    	$bots = BOT::all();
    	return view('dash.admin.bots', compact('title','bots'));
    }

    public function allProspects()
    {
        $title = 'Prospective Students';
        $prospects = User::where('role', 'prospect')->get();

        return view('dash.admin.prospects', compact('title','prospects'));
    }

    public function downloadZip($id)
    {
        $user = User::find($id);
        $file = public_path(). "/assets/documents/".$user->doc_name;
        $filename = $user->f_name.'_'.$user->l_name.'.zip';

        $headers = array(
                  'Content-Type: application/zip',
                );

        return response()->download($file, $filename, $headers);
    }
}
