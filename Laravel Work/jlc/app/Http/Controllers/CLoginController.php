<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class CLoginController extends Controller
{
    //
    public function index(Request $req){
        $validateData = $req->validate([
            'c_email' => 'required|email',
            'c_pass'  => 'required'
        ]);

        $c_email = $req->c_email;
        $c_pass  = $req->c_pass;
       
        $user = DB::table('looshaqeeyahashirkadda')
                ->where('c_email',$c_email)
                ->first();
        $hashed_pass = $user->c_pass;

        if($user != null){
            if (Hash::check($c_pass, $hashed_pass))
        {
            $c_name = $user->c_name;
           
            $req->session()->put('c_email' , $c_email, 'c_name',$c_name);
            return redirect('/employer_home')->with(['c_name'=>$c_name]);
        }else{

            return redirect()->back()->with('danger','Invalid Username Or Password');
        }
        
        }

        else{

            return redirect()->back()->with('danger','Invalid Username Or Password');
        }


        
        
       
    }
}
