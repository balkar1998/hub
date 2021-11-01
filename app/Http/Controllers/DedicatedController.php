<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assistantprofile;
use DB;

class DedicatedController extends Controller
{
    //

    function search(Request $req)
    {
        $finder_type = $req->searchbox;

        // $assistants = DB::table('assistantprofiles')->
        //                   select('*')->
        //                   where('specialization','=',$finder_type)->
        //                   get();

                          $assistants = DB::table('assistantprofiles')->
                          select('assistantprofiles.email','assistantprofiles.profilepicture','assistantprofiles.video','assistantprofiles.describe','assistantprofiles.working_hours','assistantprofiles.prefer_timezone','assistantprofiles.equipment','assistantprofiles.specialization','assistantprofiles.skills','assistantprofiles.github_url','assistantprofiles.resume','users.firstname','users.lastname','users.id')->
                          join('users', 'users.email', '=', 'assistantprofiles.email')->
                          where('specialization','=',$finder_type)->
                          get();                 

        return View("dedicatedsearch", ['assistantsdata' => $assistants]);

    }
}
