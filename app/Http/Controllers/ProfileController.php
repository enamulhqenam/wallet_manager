<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    protected $ValidationRules = [
        'name' => 'required',
        'email' => 'required',
        'photo' => 'image|mimes:jpg,jpeg,png,gif|max:2048'
    ];

    public function edit()
    {
        $User = User::where('id',auth()->user()->id)->first();
        return view('layouts.profileEdit',compact('User'));
    }

    public function update(Request $request)
    {
        $this->validate($request , $this->ValidationRules);
        $Name = $request->name;
        $Email = $request->email;
        $Photo = NULL ;
        if($request->file('photo')){
            $file = $request->file('photo');
            $Photo = auth()->user()->id.'_'.rand().rand().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/upload/users'),$Photo);
        }

        User::find(auth()->user()->id)->update([
            'name' => $Name,
            'email' => $Email,
            'photo' => $Photo,
        ]);
        return back();
    }
}
