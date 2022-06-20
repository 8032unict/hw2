<?php
namespace App\Http\Controllers;   //  da mettere sempre
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Post;


class PostController extends Controller{



    public function showPosts($q){
        //in progress
        if(session('username') == null){
            return redirect('login');
        }
        $posts =  Post::orderBy('postID','desc')->limit($q)->get();
        $count = Post::orderBy('postID','desc')->limit($q)->count();
        if($count ==  0){
            $array = array(['found'=>false]);
            return $array;
        }
        foreach ($posts as $post){
            $user =  User::where('personID',$post['userID'])->first();

            $array[] =  array(
                'postid' => $post['postID'],
                'username' => $user->username,
                'title' => $post['title'],
                'story' => $post['story'],
                'time'  => $post['time'],
                'fox'   => $post['fox'],
                'numberOfPosts'  => $q


            );

            
        }
        return $array;
    }

    public function deletePost($q){
        if(session('username') == null){
            return redirect('login');
        }
        $postDeleted  =  Post::where('postID',$q)->delete();
        if($postDeleted){
            return array('deleted'=>true);
        }
        else return array('deleted'=>false);
    }

    public function searchPosts($q){
        if(session('username') == null){
            return redirect('login');
        }
        $posts =  Post::where('title','LIKE',$q)->orWhere('story','LIKE',$q)->orderBy('postID','desc')->get();
        $count = Post::where('title','LIKE',$q)->orWhere('story','LIKE',$q)->orderBy('postID','desc')->count();
        if($count ==  0){
            $array = array(['found'=>false]);
            return $array;
        }
        foreach ($posts as $post){
            $user =  User::where('personID',$post['userID'])->first();

            $array[] =  array(
                'postid' => $post['postID'],
                'username' => $user->username,
                'title' => $post['title'],
                'story' => $post['story'],
                'time'  => $post['time'],
                'fox'   => $post['fox'],
                'numberOfResults'  => $count,
                'found'  => true,
                'search'=> $q


            );

            
        }
        return $array;
    }

    public function showMyPosts(){
        if(session('username') == null){
            return redirect('login');
        }
        $userIDquery = User::where('username',Session::get('username'))->first();
        $userID = $userIDquery['personID'];
        $posts =  Post::where('userID',$userID)->orderBy('postID','desc')->get();
        $count = Post::where('userID',$userID)->orderBy('postID','desc')->count();
        if($count ==  0){
            $array = array(['found'=>false]);
            return $array;
        }
        foreach ($posts as $post){
            $user =  User::where('personID',$post['userID'])->first();

            $array[] =  array(
                'postid' => $post['postID'],
                'username' => $user->username,
                'title' => $post['title'],
                'story' => $post['story'],
                'time'  => $post['time'],
                'fox'   => $post['fox'],
                'numberOfPosts'  => $count,
                'found'  => true


            );

            
        }
        return $array;


    } 

    
}





?>
