<?php

namespace App\Http\Controllers;

class RequirementsController extends Controller
{
    public function index($challenge){
        if($challenge == 'newsletter'){
            $challenge = "Treehouse Newsletter Signup";
            $pdf = "pdf/Newsletter.pdf";
        }
        else{
            $challenge = "Treehouse Reporting";
            $pdf = "pdf/Reporting.pdf";
        }
        return view('pages.requirements', compact('challenge', 'pdf'));
    }
}
