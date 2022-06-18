<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceBooking;

class SrvcBooking extends Controller
{
    function save(Request $req)
    {
        //print_r($req->input());
        $data = new ServiceBooking;
        $data->bslist_id = $req->bslist_id;
        $data->bs_details = $req->bs_details;
        $data->bs_address = $req->bs_address;
        $data->bs_cs = $req->bs_cs;
        $data->bs_ps = $req->bs_ps;
        $data->bs_c = $req->bs_c;
        $data->bs_mob = $req->bs_mob;
        $data->bs_email = $req->bs_email;
        $data->save();
        return redirect('ssb');
    }
}
