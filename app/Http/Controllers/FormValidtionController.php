<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidtionController extends Controller
{
    public function UserForm(Request $request) {
        $this->validate($request, [
            'Name' =>'required',
            'Username'  =>'required',
            'Date of Birth'=>'required',
            'Email' => 'required|email',
            'Telephone No'=>'required',
            'NIC No'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Gender'=>'required',
            'Password'=>'required',
            'Reenter Password'=>'required'
        ]);

        Form::create($request->all());
        return back()->with('success', 'Your form has been submitted.');
    }
}
