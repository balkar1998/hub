<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    <link rel="stylesheet" href="{{ asset('/assets/css/chatbot.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
  .ded {
    display: flex;
    justify-content: space-between;
}
</style>
</head>
<body>
    
    <div class="container-fluid">
      <!-- sdfljhkjgvbkdfxgl -->
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
                    <p>Client Name</p>
                    <a id="tasks" onclick="tasks()" class="explore btn block-btn btn-primary">Explore Task Ideas</a>
                </div>
            </div>
            <div class="bg-white">
              <div class="ded bg-gray px-4 py-2 bg-light">
                <p class="h5 mb-0 py-1" onclick="recent()" id="recent">All messages</p>
                <div class="search">
                    <form action="/dedicate" method="get">
                      <input type="text" name="searchbox" style="width: 90px">
                      <button type="submit" class="btn"><i class="fas fa-search"></i></button>
                    </form>
                </div>
              </div>
      
              <div class="messages-box">
                <div class="list-group rounded-0">
                  @if (isset($assistant))
                    @foreach ($assistant as $item)
                    <form action="/chat/" method="post">
                      @csrf
                      <input type="hidden" id="assistant_id" name="assistant_id" value="{{ $item->id }}">
                    <button type="submit" class="list-group-item list-group-item-action active text-white rounded-0">
                    <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                      <div class="media-body ml-4">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                          <h6 class="mb-0">{{ $item->firstname }} {{ $item->lastname }}</h6><small class="small font-weight-bold">25 Dec</small>
                        </div>
                        <p class="font-italic mb-0 text-small">{{ $item->specialization }}</p>
                      </div>
                    </div>
                  </button>
                </form>
                    @endforeach
                    @endif
                </div>
              </div>
              

            </div>
          </div>

          <!-- Chat Box-->
          <div class="col-md-9">
            
            <div id="chatbox-include" class="chatbox-include" style="display: block">
              @include('chatbox')
            </div>

            <div id="chattasks-include" class="chattasks-include" style="display: none">
              @include('chattasks')
            </div>

          </div>
        </div>
      </div>

<script>
  function tasks(){
    document.getElementById("chatbox-include").style.display = "none";
    document.getElementById("chattasks-include").style.display = "block";
    $("#outer-tasks").css("display","block");
    $(".backstep").css("display","none");
    $(".model").css("display","none");
  }

  function recent(){
    document.getElementById("chatbox-include").style.display = "block";
    document.getElementById("chattasks-include").style.display = "none";
  }
</script>

<script>

  // var str = window.location.href;
  // var last = str.substring(str.lastIndexOf("/") + 1, str.length);
  // var last = document.getElementById("assistant_id").value;
  // console.log(last);

  // jQuery("#assistant_id").val(function() {
  //   return last;
  // });

</script>

</body>
</html>
