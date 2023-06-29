<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;


class JokeController extends Controller
{
    public function vote(Request $request){
        $id=$request->id;
        $this->addCookie($id);
        $is_joke=DB::table('joke')->where('id',$id)->exists();
        if($is_joke){
            $vote=(isset($_POST['like'])) ? 1 : 2 ;   //1: là like, 2: dislike
            $joke=DB::table('joke')->where('id',$id)->update([
                'vote'=>$vote,
            ]);
        }
        return redirect('/');
    }

    public function addCookie($id){
        $name='joke';
        $value_cookie;
        $id_joke=[];
        if(isset($_COOKIE[$name])){
            $id_joke=json_decode($_COOKIE[$name]);
        }
        array_push($id_joke,$id);
        $value_cookie=json_encode($id_joke,$id);
        setcookie($name,$value_cookie, time() + (3600*24), "/");
    }

    public function getJoke(){
        $jokes=config('jokes.joke')->toArray();
        $name='joke';
        $id=[];
        $joke=null;
        foreach($jokes as $value){
                if(isset($_COOKIE[$name])){
                    $id=json_decode($_COOKIE[$name]);
                    if(in_array($value->id,$id)){
                        continue;
                    }
                }
                $joke=$value;
            }
            return view('index',compact('joke'));
    }
}

