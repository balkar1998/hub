<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Taskcat;
use App\Models\User;
use App\Models\ClientChatting;
use DB;

class TasksController extends Controller
{
    //
    function get( $id=0 ){

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

        return View("chatbot", ['data' => $taskdata , 'catdata' => $taskcategory , 'assistant' => $temp ,'chatting' => $chat ]);
    
    }

    function chat(Request $req){
        
        $reciver_id = User::whereEmailAndUserType($req->reciver,'1')->first();
        
        $sender_id = User::whereEmailAndUserType($req->sender,'3')->first();

        $input = array(
            'reciver_id' => $req->reciver,
            'sender_id' => $sender_id['id'],
            'sender_message' => $req->message,
        );

        $data = ClientChatting::create($input);

        return redirect('/chat/'. $req->reciver);

    }
}
