<div style="padding-bottom:28px" id="end" class="chat-box bg-white">
   
    @foreach ($chatting as $items)
    
    @if ($items->sender_message != "")
    <!-- Reciever Message-->
    {{-- <div class="media w-50 ml-auto mb-3">
      <div class="media-body">
        <div class="bg-primary rounded py-2 px-3 mb-2">
          <p class="text-small mb-0 text-white">{{ $items->sender_message }}</p>
        </div>
    </div>
  </div> --}}
    @endif

    @if ($items->reciver_message != "")
    <!-- Sender Message-->
    {{-- <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
      <div class="media-body ml-3">
        <div class="bg-light rounded py-2 px-3 mb-2">
          <p class="text-small mb-0 text-muted">{{ $items->reciver_message }}</p>
        </div>
        <p class="small text-muted">{{ $items->created_at }}</p>
      </div>
    </div> --}}
    @endif
    @endforeach
    
</div>
  
  <!-- Typing area -->
  <form action="/chatc" method="post" class="bg-light">
    @csrf
    @if (session()->get('type') == 3)
      <?php $senderemail = session()->get('email') ?>
    @endif

    @if (session()->get('type') == 1)
      <?php $senderemail = session()->get('email') ?>
    @endif
    

    <div  class="input-group">
      <input type="text" name="message" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
      {{-- @foreach ($assistant as $item) --}}
      <input type="hidden" id="reciver" class="reciver" name="reciver" value="{{$id}}">
      {{-- @endforeach --}}
      <input type="hidden" name="sender" value="{{ $senderemail }}">
      <div class="input-group-append">
        <button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
      </div>
    </div>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script>
    fetch_chat();
    setInterval(function(){
      // console.log(data)
      fetch_chat();
    }, 5000);

function fetch_chat() {  
     
     var _id = '<?php echo $id; ?>'

    //  console.warn(_id);

                    $.ajax({
                        url: '/get_chat/'+_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                           console.log(data);
                          $('#end').empty();
                           $.each(data, function(key, value) {


                            if(value.sender_message !== null){
                                $('#end').append(
                                    ' <div class="media w-50 ml-auto mb-3"> <div class="media-body">   <div class="bg-primary rounded py-2 px-3 mb-2">    <p class="text-small mb-0 text-white">'+value.sender_message+'</p> </div>  <p class="small text-muted">'+value.created_at+'</p>  </div> </div>');
                           }

                             if(value.reciver_message !== null){
                                $('#end').append(
                                    ' <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle"> <div class="media-body ml-3"><div class="bg-light rounded py-2 px-3 mb-2"> <p class="text-small mb-0 text-muted">'+value.reciver_message+'</p>   </div> <p class="small text-muted">'+value.created_at+'</p> </div>  </div>');
                           }
                           scroll_view();
                            });
                        }
                    });
              // console.log(data)
       
        }
        function scroll_view(){
var element = document.getElementById("end");
element.scrollTop = element.scrollHeight;
        }
</script>