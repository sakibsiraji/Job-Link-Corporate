<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SempregModel;

class Semreg extends Controller
{
    function save(Request $req)
    {
        //print_r($req->input());
        $data = new SempregModel;
        $data->se_name = $req->se_name;
        $data->se_dob = $req->se_dob;
        $data->se_email = $req->se_email;
        $data->se_address = $req->se_address;
        $data->se_cs = $req->se_cs;
        $data->se_ps = $req->se_ps;
        $data->se_c = $req->se_c;
        $data->se_mob = $req->se_mob;
        $data->se_pass = $req->se_pass;
        $data->seskill_id = $req->seskill_id;
        $data->save();
        //return 'successful';
        return redirect('sssem');
    }
}
