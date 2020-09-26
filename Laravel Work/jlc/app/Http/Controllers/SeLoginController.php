<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;


class SeLoginController extends Controller
{
    //
    public function index(Request $req){
        $validateData = $req->validate([
            'se_email' => 'required|email',
            'se_pass'  => 'required'
        ]);

        $se_email = $req->se_email;
        $se_pass  = $req->se_pass;
       
        $user = DB::table('shaqaalexirfadleh')
                ->where('se_email',$se_email)
                ->first();
        $hashed_pass = $user->se_pass;

        if($user != null){
            if (Hash::check($se_pass, $hashed_pass))
        {
            $se_name = $user->se_name;
           
            $req->session()->put('se_email' , $se_email, 'se_name',$se_name);
            return redirect('/employee_home')->with(['se_name'=>$se_name]);
        }else{

            return redirect()->back()->with('danger','Invalid Username Or Password');
        }
        
        }

        else{

            return redirect()->back()->with('danger','Invalid Username Or Password');
        }


        
        
       
    }
}
