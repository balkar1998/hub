<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Assistantprofile;
use App\Models\quiz;
use Session;
use DB;

class AssistantController extends Controller
{
    // assistant profile 

    function profile(Request $req){

        if(session()->get('type') == '1'){
            $email = session()->get("email");
            //  = session()->get('email');
        }

        // die($email);

        if($email != "")
        {
        $user = User::whereEmailAndUserType($email,'1');

        if($user != ""){

        // $firstname = $user->firstname;
        // $lastname = $user->lastname;

        $input = array(
            'email' => $email,
            'profilepicture' => $req->profileimage,
            'video' => $req->video_url,
            'describe' => $req->description,
            'working_hours' => $req->hours_per_week,
            'prefer_timezone' => $req->fav_language,
            'equipment' => $req->Equipment,
            'specialization' => $req->Specialization,
            'github_url' => $req->github_url,
            'resume' => $req->resume,
            'session' => '1',
        );

        $data = Assistantprofile::create($input);


        Session::put('profiledone', 'profiledone');

        return redirect('doquiz');
    }

    }
    else{
        return "some thing bad";
    }

    }

    // ses 

    function ses(){

        if(session()->get('type') == '1'){
            $email = session()->get("email");
        }

        $abc = Assistantprofile::whereEmailAndSession($email,'1')->count();

        if($abc == 1){

            $skill = DB::table('assistantprofiles')->
                        select('skills')->
                        where('email','=',$email)->
                        get();

            $sk = $skill[0]->skills;

            Session::put('profiledone', 'profiledone');

            $questions = DB::table('quizs')->
                            select('*')->
                            where('type','=',$sk)->
                            get();

            $opt = $questions[1]->options;

            $pieces = explode("^^^", $opt);

            return View("assistant/test", ['data' => $questions , 'options' => $pieces]);

        }
        else{
            return redirect('intro');
        }

    }

    function answer(Request $req , $id=0 ,$sid=0){

        $abc = array();
        for($i=1; $i<=10; $i++)
        {
            $answer = $req->post('que'.$i);
            if( $answer != null )
            {
                $correct = quiz::whereIdAndAnswer($i,$answer)->first();
                if( $correct != null )
                {
                    $abc[] = true;
                }
            }
        }
        $quiz_result = count($abc);
        // if( $quiz_result == 4 || $quiz_result == 5){
            Assistantprofile::where('quiz', '0')->update(['quiz' => '1']);
            // return redirect('assistantchat');

            $client = DB::table('clientchatting')->
                        distinct()->
                        get('sender_id');

            $arr = array();

            foreach($client as $ci){

                $clientaa = DB::table('users')->
                              select('users.email','users.firstname','users.lastname','users.id')->
                              where('users.id','=',$ci->sender_id)->
                              get(); 
    
                array_push($arr,$clientaa);
    
            }


            $temp = array();

            for($i=0; $i<count($arr); $i++){

                array_push($temp,$arr[$i]['0']);

            }

            $loginassistant = session()->get('email');
            $sid = DB::table('users')->
                    select('id')->
                    where('users.email','=',$loginassistant )->
                    get();

            $chat = DB::table('clientchatting')->
                    select('*')->
                    whereSender_idAndReciver_id($id,$sid[0]->id)->
                    get();

            return View("assistant/assistantchat", [ 'assistant' => $temp ,'chatting' => $chat ]);
        // }
        // else{
        //     return redirect('intro');
        // }
    }
}
