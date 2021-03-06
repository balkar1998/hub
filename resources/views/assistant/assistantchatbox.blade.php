<div id="end" class="px-4 py-5 chat-box bg-white">
  
    @foreach ($chatting as $items)

    @if ($items != "")
      
      @if ($items->sender_message != "")
    <!-- Sender Message-->
    {{-- <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
      <div class="media-body ml-3">
        <div class="bg-light rounded py-2 px-3 mb-2">
          <p class="text-small mb-0 text-muted">{{ $items->sender_message }}</p>
        </div>
        <p class="small text-muted">{{ $items->created_at }}</p>
      </div>
    </div> --}}
    @endif

    @if ($items->reciver_message != "")
    <!-- Reciever Message-->
    {{-- <div class="media w-50 ml-auto mb-3">
        <div class="media-body">
          <div class="bg-primary rounded py-2 px-3 mb-2">
            <p class="text-small mb-0 text-white">{{ $items->reciver_message }}</p>
          </div>
          <p class="small text-muted">{{ $items->created_at }}</p>
        </div>
      </div> --}}
      @endif
    

    @endif
    @endforeach
  </div>
  <div class="unchat-box" style="display: none">
      <h1>Here you did not select any client or you don't have</h1>
  </div>

  
  <!-- Typing area -->
  <form action="/chata" method="POST" class="bg-light">
    @csrf
    @if (session()->get('type') == 3)
      <?php $senderemail = session()->get('email') ?>
    @endif

    @if (session()->get('type') == 1)
      <?php $senderemail = session()->get('email') ?>
    @endif

    <div class="input-group">
      <input type="text" name="message" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
      <input type="hidden" id="sender" class="sender" name="sender" value="{{ $abd[1] }}">
      <input type="hidden" name="reciver" value="{{ $senderemail }}">
      <div class="input-group-append">
        <button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
      </div>
    </div>
  </form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script>
    fetch_chat();
    setInterval(function(){
      fetch_chat();
    }, 5000);

function fetch_chat() {  

    var _id = '<?php echo $abd[0][0]->id;  ?>'

    var _sid = '<?php echo $abd[1]; ?>'

     console.warn(_id);

                    $.ajax({
                        url: '/get_asschat/'+_id+'/'+_sid,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                           if(data != ""){
                            document.getElementById("tasks").style.display = "block";
                            document.getElementById("unchat-box").style.display = "block";
                           }else{
                            document.getElementById("tasks").style.display = "none";
                            document.getElementById("unchat-box").style.display = "none";
                            document.getElementById("chatbox-include").style.display = "none";
                           }
                           $('#end').empty();
                           $.each(data, function(key, value) {

                           if(value.sender_message !== null){
                                $('#end').append(
                                    '<div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle"> <div class="media-body ml-3"><div class="bg-light rounded py-2 px-3 mb-2"> <p class="text-small mb-0 text-muted">'+value.sender_message+'</p>   </div> <p class="small text-muted"></p> </div>  </div>');
                           }

                           if(value.reciver_message !== null){
                                $('#end').append(
                                    '<div class="media w-50 ml-auto mb-3"> <div class="media-body">   <div class="bg-primary rounded py-2 px-3 mb-2">    <p class="text-small mb-0 text-white">'+value.reciver_message+'</p> </div>  </div> </div> ');
                           }
                           scroll_view();
                            });
                        }
                    });
               
       
        }
        function scroll_view(){
var element = document.getElementById("end");
element.scrollTop = element.scrollHeight;
        }
</script>