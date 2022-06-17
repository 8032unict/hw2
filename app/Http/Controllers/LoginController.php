<?php
namespace App\Http\Controllers;   //  da mettere sempre
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class LoginController extends Controller {


    
    public function login(){
        if(session('username') != null){
            return redirect('home')
                ->with('csrf_token', csrf_token());
        }
        else{
            return view('login');
        }
    }

    public function checkCredentials(Request $request) //ok
     {
        $error  =  true;
        /* $user = User::where('username', $request->input('username'))->where('password',$request->input('password'))->first(); //ok */
        /* dd($user);  //per  fare commenti che alterano l'esecuzione */
        $user = User::where('username', $request->input('username'))->first();

        if($user !=null){
            if(!password_verify(request('password'),$user->password)){
                return back()->withInput()->withErrors(
                    [
                        'error' => 'true'
                    ]
                    );
            }
            Session::put('username',$user->username);
            return redirect('home');
        }
        else {
            return back()->withInput()->withErrors(
                [
                    'error' => 'emptyFields'
                ]
                );
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login');
    }
}

?>