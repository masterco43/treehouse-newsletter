<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SignUp;

class NewsLetterController extends Controller
{
    public function index(){
        return view('pages.signup');
    }

    public function signUp(request $request){
        //back end validation of the fields
        $validatedData = $request->validate([
            'name' => ['required', 'min:2', 'max:50'],
            'email' => ['required', 'email:rfc,dns'],
        ]); 

        //saves the SignUp
        $SignUp = new SignUp;
        foreach(['name', 'email'] as $field)
            $SignUp->{$field} = $request->{$field};
        $SignUp->save();

        return back()->with('success', 'Successfully signed up for newsletter!');   
    }

    public function showSignUpsTable(){
        $SignUp = SignUp::get();
        return view('pages.table', compact('SignUp'));
    }
}
