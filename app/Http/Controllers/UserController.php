<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
 
  
    public function userlogin(){
        return view('auth.login');
    }
    public function userhome(){
        return view('user.usermain');
    }
    public function login(Request $request){
       
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
         
                return redirect()->intended('/');
            }
   
    
        else{
            //return redirect()->route('userlogin')->withErrors(['error' => 'Invalid username or password']);
            return redirect()->back()->with('error', 'Invalid email or password');

        }
       
    }
    
}
public function logout()
{
    Auth::logout();
    return redirect('/login');
}
    public function userreg() {
        return view('auth.register');
    }
    public function signup(Request $request){
        // $request->validate([
        //             'firstname' => 'required|max:255',
        //             'lastname' => 'required|max:255',
        //             'email' => 'required|email|unique:users,email',
        //             'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:10',
        //             'password' => 'required|min:8',
        //         ]);
                $user =new User();
                
                $user->firstname=$request->firstname;
                $user->lastname=$request->lastname;
                $user->email=$request->email;
                $user->phone=$request->phone;
                $user->password=bcrypt($request->password);
                $user->save();
                return redirect('/login')->with('success', 'You have been successfully registered.');
        }
    
//         public static function isAdmin($email, $password)
// {
//     $user = self::where('email', $email)->first();

//     if ($user && Hash::check($password, $user->password) && $user->role === 'admin') {
//         return true;
//     }

//     return false;
}

  
    
//         public function logout(Request $request)
//         {
//            session()->flush();
//            return redirect()->route('adm.log');
//         }
// public function logoutUser()
//     {
//             return redirect()->route('user.log');
//     }
// }

