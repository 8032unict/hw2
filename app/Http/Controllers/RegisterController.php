<?php
namespace App\Http\Controllers;  //DA INSERIRE NAMESPACEEEEE
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller{

    public function register(){
        if(session('username') != null){
            return redirect('home')
                ->with('csrf_token', csrf_token());
        }
        else{
            return view('register');
        }
    }

    public function registerUser(){
        $request = request();
        if ($this->countErrors($request) ==  0)  {
            $newUser =  User::create([
            'name' => $request['name'],
            'surname'  => $request['surname'],
            'username'  => $request['username'],
            'email'  =>  $request['email'],
            'password'   =>  password_hash($request['password'],PASSWORD_BCRYPT)
            ]);

            if($newUser){
                Session::put('username',$newUser->username);
                return redirect('home');
            }
            else return back()->withInput()->withErrors(
                [
                    'error' => 'true'
                ]
                );
        }
        else return back()->withInput()->withErrors(
            [
                'error' => 'true'
            ]
            );
    }
    
    public function countErrors($data){
        if(!preg_match("/^[a-zA-Z0-9_]{1,15}/",$data['username'])){
            $errors[] = "L'username contiene caratteri non validi o la sua lunghezza è maggiore di 15.";
        }
        else{
            //check se user già esistente
            $username = User::where('username',$data['username'])->first();
            if($username  !==  null){
                $errors[] = "Username già esistente.";
            }
        }


        if(!filter_var($data["email"],FILTER_VALIDATE_EMAIL)){
            $errors[] = "E-mail non valida";
        }
        else{
            //check se email già esistente
            $email = User::where('email',$data['email'])->first();
            if($email !== null){
                $errors[] = "E-mail già esistente";
            }
        }

    $uppercase = preg_match('@[A-Z]@', $data['password']);
    $lowercase = preg_match('@[a-z]@', $data['password']);
    $number    = preg_match('@[0-9]@', $data['password']);
    $specialChars = preg_match('@[^\w]@', $data['password']);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($data["password"]) < 8 || strlen ($data["password"]) > 20) {
        $errors[]  = 'Lunghezza password non valida. (minimo 8 caratteri, massimo 20 caratteri)';
    }
    
    
    if(strcmp($data["password"],$data["confirmpassword"]) != 0){
            $errors[] = "Le password non corrispondono.";
    }

    if(isset($errors)){
        return 1;
    }
    return 0;
        



    }

    public function checkUsername(){
        $request = request();
        $exists = User::where('username',$request['q'])->exists();
        return ['exists'=>$exists];
    }

    public function checkEmail(){
        $request = request();
        $exists = User::where('email',$request['q'])->exists();
        return ['exists'=>$exists];
    }
}

/* done in */