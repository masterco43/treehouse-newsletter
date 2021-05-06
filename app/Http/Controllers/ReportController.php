<?php

namespace App\Http\Controllers;

use App\Models\Site;

class ReportController extends Controller
{
    public function challenge1(){
        $number = 1;
        $challenge = "Provide a list (association name, company name, domain) of all active primary supercharged domains belonging to the Basement Systems, Inc. association.";

        $sql = "SELECT associations.name as association_name, companies.name as company_name, domains.domain as domain FROM sites 
            join associations on sites.association = associations.id 
            join domains on domains.site = sites.id 
            join companies on sites.company = companies.id 
            WHERE associations.name = 'Basement Systems, Inc.' AND sites.is_supercharged = 1 AND domains.is_primary = 1 AND domains.is_deleted = 0 AND sites.is_deleted = 0";

        $data = Site::SelectRaw('associations.name as association_name, companies.name as company_name, domains.domain as domain')
            ->join('associations', 'sites.association', 'associations.id')->join('domains', 'domains.site', 'sites.id')->join('companies', 'sites.company','companies.id')
            ->whereRaw("associations.name = 'Basement Systems, Inc.' AND sites.is_supercharged = 1 AND domains.is_primary = 1 AND domains.is_deleted = 0 AND sites.is_deleted = 0")->get();
        
        $headers = ['association_name', 'company_name', 'domain'];
        
        return view('pages.report', compact('challenge', 'number', 'sql', 'headers', 'data'));
    }

    public function challenge2(){
        $number = 2;
        $challenge = "Provide a list (association name, company name, site name) of all active sites that do not​have a domain.";

        $sql = "select associations.name as association_name, companies.name as company_name, sites.name as site_name from sites 
            join associations on sites.association = associations.id  join companies on sites.company = companies.id 
            where sites.is_deleted = 0 AND sites.id not in (Select domains.site from domains)";

        $data = Site::SelectRaw('associations.name as association_name, companies.name as company_name, sites.name as site_name')
            ->join('associations', 'sites.association', 'associations.id')->join('companies', 'sites.company','companies.id')
            ->whereRaw("sites.is_deleted = 0 AND sites.id not in (Select domains.site from domains)")->get();

        $headers = ['association_name', 'company_name', 'site_name'];

        return view('pages.report', compact('challenge', 'number', 'sql', 'headers', 'data'));
    }

    public function challenge3(){
        $number = 3;
        $challenge = "Provide a list (site id, site name) of distinct active sites who have one or more domain, and whose domains are all ​deleted.";
        $sql = "select sites.id as site_id, sites.name as site_name from sites join domains on domains.site = sites.id where sites.is_deleted = 0 and domains.is_deleted = 1 GROUP BY sites.id";

        $data = Site::SelectRaw('sites.id as site_id, sites.name as site_name')
            ->join('domains', 'domains.site', 'sites.id')
            ->whereRaw("sites.is_deleted = 0 and domains.is_deleted = 1")->groupBy('sites.id')->get();
        
        $headers = ['site_id', 'site_name'];

        return view('pages.report', compact('challenge', 'number', 'sql', 'headers', 'data'));
    }
}
