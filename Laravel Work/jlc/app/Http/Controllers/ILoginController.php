<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class ILoginController extends Controller
{
    //
    public function index(Request $req){
        $validateData = $req->validate([
            'i_email' => 'required|email',
            'i_pass'  => 'required'
        ]);

        $i_email = $req->i_email;
        $i_pass  = $req->i_pass;
       
        $user = DB::table('shaqaaleeyeshaqsiyeed')
                ->where('i_email',$i_email)
                ->first();
        $hashed_pass = $user->i_pass;

        if($user != null){
            if (Hash::check($i_pass, $hashed_pass))
        {
            $i_name = $user->i_name;
           
            $req->session()->put('i_email' , $i_email, 'i_name',$i_name);
            return redirect('/employee_home')->with(['i_name'=>$i_name]);
        }else{

            return redirect()->back()->with('danger','Invalid Username Or Password');
        }
        
        }

        else{

            return redirect()->back()->with('danger','Invalid Username Or Password');
        }


        
        
       
    }
}
