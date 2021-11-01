<div class="px-4 py-5 chat-box bg-white">
   
    @foreach ($chatting as $items)

    @if ($items != "")
    @if ($items->reciver_message != "")
    <!-- Sender Message-->
    <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
      <div class="media-body ml-3">
        <div class="bg-light rounded py-2 px-3 mb-2">
          <p class="text-small mb-0 text-muted">{{ $items->reciver_message }}</p>
        </div>
        <p class="small text-muted">{{ $items->created_at }}</p>
      </div>
    </div>
    @endif
    

    <!-- Reciever Message-->
    <div class="media w-50 ml-auto mb-3">
        <div class="media-body">
          <div class="bg-primary rounded py-2 px-3 mb-2">
            <p class="text-small mb-0 text-white">{{ $items->sender_message }}</p>
          </div>
          <p class="small text-muted">{{ $items->created_at }}</p>
        </div>
      </div>
    @endif
    @endforeach
  </div>

  
  <!-- Typing area -->
  <form action="/chatc" method="POST" class="bg-light">
    @csrf
    @if (session()->get('type') == 3)
      <?php $senderemail = session()->get('email') ?>
    @endif

    @if (session()->get('type') == 1)
      <?php $senderemail = session()->get('email') ?>
    @endif

    <div class="input-group">
      <input type="text" name="message" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
      @foreach ($assistant as $item)
      <input type="hidden" name="reciver" value="{{ $item->email }}">
      @endforeach
      <input type="hidden" name="sender" value="{{ $senderemail }}">
      <div class="input-group-append">
        <button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
      </div>
    </div>
  </form>