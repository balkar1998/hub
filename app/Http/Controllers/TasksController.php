<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Taskcat;
use App\Models\User;
use App\Models\ClientChatting;
use App\Models\Assistantprofile;
use App\Models\TasksAssign;
use App\Models\PendingTasks;
use DB;

class TasksController extends Controller
{
    //
    function get(Request $req){

        $id = $req->assistant_id;

        $taskdata = Task::all();
        $taskcategory = Taskcat::all();

        // $client = DB::table('users')->
        //                   select('users.email','users.firstname','users.lastname','users.id','assistantprofiles.specialization','assistantprofiles.profilepicture')->
        //                   join('assistantprofiles', 'assistantprofiles.email', '=', 'users.email')->
        //                   where('users.id','=',$id)->
        //                   get();  
        if(session()->get('type') == '3'){
            $loginclient = session()->get('email');
            $sid = DB::table('users')->
                    select('id')->
                    where('users.email','=',$loginclient )->
                    get();       
        }
        
        $client = DB::table('clientchatting')->
                        distinct()->
                        where('clientchatting.sender_id','=',$sid[0]->id)->
                        get('reciver_id');

        $arr = array();

        foreach($client as $ci){

            $clientaa = DB::table('users')->
                          select('users.email','users.firstname','users.lastname','users.id','assistantprofiles.specialization','assistantprofiles.profilepicture')->
                          join('assistantprofiles', 'assistantprofiles.email', '=', 'users.email')->
                          where('users.id','=',$ci->reciver_id)->
                          get(); 

            array_push($arr,$clientaa);

        }

        $temp = array();

        for($i=0; $i<count($arr); $i++){

            array_push($temp,$arr[$i]['0']);

        }

        $chat = DB::table('clientchatting')->
                    select('*')->
                    whereReciver_idAndSender_id( $id , $sid[0]->id )->
                    get();

        return View("chatbot", [ 'id' => $id , 'data' => $taskdata , 'catdata' => $taskcategory , 'assistant' => $temp ,'chatting' => $chat ]);
    
    }

    function chat(Request $req){

        if($req->reciver){
            $reciver_id = User::whereEmailAndUserType($req->reciver,'1')->first();
            $sender_id = User::whereEmailAndUserType($req->sender,'3')->first();
        
            $input = array(
                'reciver_id' => $req->reciver,
                'sender_id' => $sender_id['id'],
                'sender_message' => $req->message,
            );

            $data = ClientChatting::create($input);

            $report = new TasksController();
            $content = new Request();
            $content->assistant_id = $req->reciver;
            return $report ->get($content);
        
        }elseif($req->reciver_id == "admin@gmail.com"){

            $reciver_id = User::whereEmailAndUserType($req->reciver_id,'1')->first();
            $sender_id = User::whereEmailAndUserType($req->sender_id,'3')->first();
        
            $input = array(
                'reciver_id' => $reciver_id->id,
                'sender_id' => $sender_id->id,
                'sender_message' => $req->message,
                'reciver_message' => 'Please wait , Our all assistants are bussy with others clients . you are in queue we assign a assistant you shortly and notify ',
            );

            $data = ClientChatting::create($input);

            $report = new TasksController();
            $content = new Request();
            $content->assistant_id = $reciver_id->id;
            return $report ->get($content);
        
        }elseif ($req->reciver_id) {
            
            $reciver_id = User::whereEmailAndUserType($req->reciver_id,'1')->first();
            $sender_id = User::whereEmailAndUserType($req->sender_id,'3')->first();
        
            $input = array(
                'reciver_id' => $reciver_id->id,
                'sender_id' => $sender_id->id,
                'sender_message' => $req->message,
            );

            $data = ClientChatting::create($input);

            $report = new TasksController();
            $content = new Request();
            $content->assistant_id = $reciver_id->id;
            return $report ->get($content);

        }

        


        // return redirect('/chat/'. $req->reciver);

    }

    function task_submit(Request $req){

        $register_assistant = Assistantprofile::whereQuiz('1')->orderBy("number_of_clients" , "ASC")->first();
        
        
            if(session()->get('type') == '3'){
                $loginclient = session()->get('email');
            }

            $sender_id = User::whereEmailAndUserType( $loginclient ,'3')->first();
            $reciver_id = User::whereEmailAndUserType( $register_assistant->email ,'1')->first();

            $assistant_tasks = TasksAssign::whereAssistantId($reciver_id->id)->count();

            $user = TasksAssign::whereAssistantIdAndClientIdAndTaskId($reciver_id , $sender_id , $req->task_id)->first();

            if($user == ""){

                if ($register_assistant->number_of_clients <= 2) 
                {

                    $input = array(
                        'assistant_id' => $reciver_id->id,
                        'client_id' => $sender_id->id,
                        'task_id' => $req->task_id,
                    );

                    $data = TasksAssign::create($input);

                    if($data != "")
                    {
                        $report = new TasksController();
                        $content = new Request();
                        $content->sender_id = $sender_id->email;
                        $content->reciver_id = $reciver_id->email;
                        $content->message = $req->task_name;
                        return $report ->chat($content);
                    }
                }
                else 
                {
                    $input = array(
                        'client_id' => $sender_id->id,
                        'task_id' => $req->task_id,
                    );

                    $data = PendingTasks::create($input);

                    if($data != "")
                    {
                        $report = new TasksController();
                        $content = new Request();
                        $content->sender_id = $sender_id->email;
                        $content->reciver_id = 'admin@gmail.com';
                        $content->message = $req->task_name;
                        return $report ->chat($content);
                    }
                }
            }
    }
}
