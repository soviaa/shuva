<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminlogin(){
        return view('admin.adminlogin');
    }
    public function postadminlogin(Request $request){
       
        {   
            $role = $request->only('role');
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
             if(Auth::user()->role==1){
                    return redirect()->intended('admin/dash');
                }else{
                    return redirect()->back()->with('error', 'not admin');
                }
            }
            else{
                //return redirect()->route('userlogin')->withErrors(['error' => 'Invalid username or password']);
                return redirect()->back()->with('error', 'Invalid email or password');
    
            }
           
        }
    }
    public function admindash(){
        return view('admin.admindash');
    }
}