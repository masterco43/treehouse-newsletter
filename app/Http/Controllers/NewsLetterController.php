<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup;

class NewsLetterController extends Controller
{
    public function index(){
        return view('pages.signup');
    }

    public function signup(request $request){
        //back end validation of the fields
        $validatedData = $request->validate([
            'name' => ['required', 'min:2', 'max:50'],
            'email' => ['required', 'email:rfc,dns'],
        ]); 

        //saves the Signup
        $Signup = new Signup;
        foreach(['name', 'email'] as $field)
            $Signup->{$field} = $request->{$field};
        $Signup->save();

        return back()->with('success', 'Successfully signed up for newsletter!');   
    }
}
