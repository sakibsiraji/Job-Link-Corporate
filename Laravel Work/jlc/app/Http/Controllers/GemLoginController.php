<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class GemLoginController extends Controller
{
    //
    public function index(Request $req){
        $validateData = $req->validate([
            'ge_email' => 'required|email',
            'ge_pass'  => 'required'
        ]);

        $ge_email = $req->ge_email;
        $ge_pass  = $req->ge_pass;
       
        $user = DB::table('shaqaalahaguud')
                ->where('ge_email',$ge_email)
                ->first();
        $hashed_pass = $user->ge_pass;

        if($user != null){
            if (Hash::check($ge_pass, $hashed_pass))
        {
            $ge_name = $user->ge_name;
           
            $req->session()->put('ge_email' , $ge_email, 'ge_name',$ge_name);
            return redirect('/employee_home')->with(['ge_name'=>$ge_name]);
        }else{

            return redirect()->back()->with('danger','Invalid Username Or Password');
        }
        
        }

        else{

            return redirect()->back()->with('danger','Invalid Username Or Password');
        }


        
        
       
    }
}
