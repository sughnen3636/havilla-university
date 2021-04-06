<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class PostController extends Controller
{
    public function index()
    {
    	$title = 'Havilla | Latest News';
    	return view('news', compact('title'));
    }

    public function sendContactFrm(Request $request)
    {
    	$this->validator($request);
    	Contact::create($request->all());

    	session()->flash('contacted', 'Thank you for reaching out to us. We will be in touch soon.');

    	return redirect()->back();
    }

    public function validator(Request $request)
    {
        $rules = [
            'first_name'    => 'required|string',
            'last_name'     => 'required|string',
            'email'         => 'required|email',
            'phone'     	=> 'required|numeric',
            'message'       => 'required|string',
        ];

        $message = [
            'first_name.required'        => 'The first name field is required',
            'first_name.string'          => 'Only text characters allowed for name fields',
            'last_name.required'        => 'The last name field is required',
            'last_name.string'          => 'Only text characters allowed for name fields',
        ];

        return $this->validate($request, $rules, $message);
    }
}
