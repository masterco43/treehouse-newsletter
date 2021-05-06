<?php

namespace App\Http\Controllers;

class ReportController extends Controller
{
    public function challenge1(){
        $number = 1;
        $challenge = "Provide a list (association name, company name, domain) of all active primary
        supercharged domains belonging to the Basement Systems, Inc. association.";
        
        return view('pages.report', compact('challenge', 'pdf'));
    }

    public function challenge2(){
        $number = 2;
        $challenge = "Provide a list (association name, company name, site name) of all active sites that do
        not​have a domain.";

        return view('pages.report', compact('challenge', 'pdf'));
    }

    public function challenge3(){
        $number = 3;
        $challenge = "Provide a list (site id, site name) of distinct active sites who have one or more domain,
        and whose domains are all​deleted.";

        return view('pages.report', compact('challenge', 'pdf'));
    }
}
