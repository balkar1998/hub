<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Assistantprofile;
use App\Models\ClientChatting;
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

       

        $quiz_value = DB::table('assistantprofiles')->
                        select('quiz')->
                        where('email','=',$email)->
                        get();

        if($quiz_value['0']->quiz == 0){

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

    }else if($quiz_value['0']->quiz == 1){
        return redirect('quizc');
    }

    }

    function answer(Request $req){

        $id = $req->reciver_id;
        $sid = $req->sender_id;

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
            $id = DB::table('users')->
                    select('id')->
                    where('users.email','=',$loginassistant )->
                    get();

            $chat = DB::table('clientchatting')->
                    select('*')->
                    whereSender_idAndReciver_id($sid,$id[0]->id)->
                    get();

            $abc = array();

            array_push($abc,$id);
            array_push($abc,$sid);
            

            return View("assistant/assistantchat", [ 'abd'=>$abc , 'assistant' => $temp ,'chatting' => $chat ]);
        // }
        // else{
        //     return redirect('intro');
        // }
    }

    function chat(Request $req){

        $reciver_id = User::whereEmailAndUserType($req->reciver,'1')->first();
        
        // $sender_id = User::whereEmailAndUserType($req->sender,'3')->first();
        
        // return $req->sender;
        $url_id = $reciver_id['id'];
        $input = array(
            'sender_id' => $req->sender,
            'reciver_id' => $reciver_id['id'],
            'reciver_message' => $req->message,
        );

        $data = ClientChatting::create($input);

        $report = new AssistantController();
        $content = new Request();
        $content->reciver_id = $url_id;
        $content->sender_id = $req->sender;
        return $report ->answer($content);

        // return redirect('/quizc/'. $url_id .'/'.$req->sender);

    }

    public function get_chat(Request $req , $id=0 , $sid=0 )
    {
        // $chat = ClientChatting::get();

            $chat = DB::table('clientchatting')->
                    select('*')->
                    whereSender_idAndReciver_id($sid,$id)->
                    get();     
       
                    

        return json_encode($chat);
    }

    public function donetask($reciver_id , $sender_id ){
        
        // return $sender_id." " .$reciver_id;

        $abc = User::whereId($reciver_id)->first();

        $assistant = Assistantprofile::whereEmail($abc->email)->first();
        
        $input = array(
            'number_of_clients' => $assistant->number_of_clients - 1,
        );

        $assistant->update($input);
        $assistant->save();

        return "done";

        
    }
    
}
