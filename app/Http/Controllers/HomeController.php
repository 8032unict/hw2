<?php
namespace App\Http\Controllers;   //  da mettere sempre
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Post;


class HomeController extends Controller{
    public function index(){
        if(session('username') == null){
            return redirect('login');
                
        }
        else{
            return view('home');
        }
    }

    public function sendPost(){
        $request = request();
        if($request['title'] == null || $request['story'] == null || strlen($request['title']) >  150 || strlen($request['story']) >  3000){
            dd('doesnt');
            return back()->withInput()->withErrors(
                [
                    'error' => 'emptyFields'
                ]
                );
        }
        $userToPickID = User::where('username',Session::get('username'))->first();
        if($userToPickID == null){
            return back()->withInput()->withErrors(
                [
                    'error' => 'noUser'
                ]
                );
        }
        $id = $userToPickID->personID;

        $newUser =  Post::create([
            'userID' => $id,
            'title'  => $request['title'],
            'story'  => $request['story'],
            'fox'  => $request['urlFox']
            ]);
        
        
        if($newUser){   
            return view('home')->with('posted','true');
        }
        else return back()->withInput()-withErrors([
            'error' => 'postNotInserted'
        ]);



}

    public function fox(){
        //accesso a api fox
        $url = 'https://randomfox.ca/floof/';
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL,$url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //per non far ritornare booleano
        $res = curl_exec($curl);
        curl_close($curl);
        return $res;
    }


}




?>