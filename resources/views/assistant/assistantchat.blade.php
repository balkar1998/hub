<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    <link rel="stylesheet" href="{{ asset('/assets/css/chatbot.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
  a#tasks 
  {
    width: 150px;
  }
</style>
</head>
<body>
    
    <div class="container-fluid">
      <?php
        $loginassistant = session()->get('email');
        $sid = DB::table('users')->
        select('id')->
        where('users.email','=',$loginassistant )->
        get(); 
        $reciver_id = $sid[0]->id;
      ?>

        <div class="row ">
          <!-- Users box-->
          <div class="col-md-3">
            <div class="rightsideheader">
                <div class="settingmenu">
                    <a href="" type="button"  class="btn">setting</a>
                </div>
                <div class="rightsideheader-title">
                    <h3>Me & Magic</h3>
                </div>
                <div class="rightsideheader-title">
                    <p>Assistant Name</p>
                      <a id="tasks" onclick="DoneTask({{$reciver_id}})" class="explore btn block-btn btn-primary" style="display: none">Close Task</a>
                </div>
            </div>
            <div class="bg-white">
              <div class="bg-gray px-4 py-2 bg-light">
                <p class="h5 mb-0 py-1" onclick="recent()" id="recent">Recent</p>
              </div>
      
              <div class="messages-box">
                <div class="list-group rounded-0">
                  @foreach ($assistant as $item)
                  <form action="/quizc" method="post">
                    @csrf
                  <button class="list-group-item list-group-item-action active text-white rounded-0">
                    <input type="hidden" name="reciver_id" value="{{ $reciver_id }}">
                    <input type="hidden" id="sender_idd" name="sender_id" value="{{ $item->id }}">
                  <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                    <div class="media-body ml-4">
                      <div class="d-flex align-items-center justify-content-between mb-1">
                        <h6 class="mb-0">{{ $item->firstname }} {{ $item->lastname }}</h6><small class="small font-weight-bold">25 Dec</small>
                      </div>
                    </div>
                  </div>
                </button>
              </form>
                  @endforeach
                </div>
              </div>
            </div>
          </div>

          <!-- Chat Box-->
          <div class="col-md-9">
            
            <div id="chatbox-include" class="chatbox-include" style="display: block">
              @include('assistant/assistantchatbox')
            </div>

          </div>
        </div>
      </div>

<script>

    var _sender_id = document.getElementById("sender").value;

  function DoneTask($reciver_id){
    var _reciver_id = $reciver_id;
    window.location.assign('/donetask/'+_reciver_id+'/'+_sender_id);  
  }

  function recent(){
    document.getElementById("chatbox-include").style.display = "block";
    document.getElementById("chattasks-include").style.display = "none";
  }
</script>

<script>

  // var str = window.location.href;
  // var last = str.substring(str.lastIndexOf("/") + 1, str.length);
  // console.log(last);

  // jQuery("#sender").val(function() {
  //   return last;
  // });

</script>

</body>
</html>