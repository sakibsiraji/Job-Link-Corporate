<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GempregModel;

class Gemreg extends Controller
{
    function save(Request $req)
    {
        //print_r($req->input());
        $data = new GempregModel;
        $data->ge_name = $req->ge_name;
        $data->ge_dob = $req->ge_dob;
        $data->ge_email = $req->ge_email;
        $data->ge_address = $req->ge_address;
        $data->ge_cs = $req->ge_cs;
        $data->ge_ps = $req->ge_ps;
        $data->ge_c = $req->ge_c;
        $data->ge_mob = $req->ge_mob;
        $data->ge_pass = $req->ge_pass;
        $data->geskill_id = $req->geskill_id;
        $data->save();
        //return 'successful';
        return redirect('ssgem');
    }
}
