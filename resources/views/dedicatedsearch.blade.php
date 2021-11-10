<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href={{ asset('/assets/css/dedicated.css') }}>
</head>
<body>
  <div class="container" id="container">
    @php
    $sr = 0;    
    @endphp
    @foreach ($assistantsdata as $item)
    @php
    $sr++;    
    @endphp
    <div class="buddy" 
    @if ($sr==1)
    style="display: block;"
    @endif
   >
      
      <div class=" row avatar">
      
          <div class="col-md-6">
              <div class="d-flex mb-4 AssistantProfile_AssistantProfile__YIxyc" data-testid="ProfileCard">
                <div>
                  <div class="d-flex align-items-center ProfileAvatar_ProfileAvatar__2Qfew" data-testid="ProfileAvatar">
                  <div class="ProfileAvatar_Image__VKPoO">
                    <img src="https://magic-dedicated.s3.ap-northeast-1.amazonaws.com/prod/uploads/1632600980258/bb1a539b-b4b4-41ba-9f14-424cd0047170/255d257c-c97b-43b5-a2d4-5aca880d9748.jpg" alt="Profile Avatar">
                  </div>
                  <div class="OnlineIndicator_OnlineIndicator__37Jok OnlineIndicator_Compact__3H8Wb" data-testid="OnlineIndicator"></div>
                </div></div><div class="ml-3 mt-1"><div class="d-flex align-items-center"><h4 class="m-0 p-0 py-1">{{ $item->firstname }} {{ $item->lastname }}<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2 mb-1"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.5101 6.77918C13.3287 7.2455 13.3287 7.76287 13.5101 8.22918L13.6164 8.53544C14.0036 9.54662 13.5347 10.6842 12.5473 11.1292L12.266 11.2542C11.8045 11.453 11.4312 11.8129 11.2157 12.2667L11.0906 12.5479C10.6455 13.535 9.50754 14.0037 8.49603 13.6167L8.20843 13.5104C7.74196 13.3291 7.22443 13.3291 6.75796 13.5104L6.47037 13.6167C5.45885 14.0037 4.32091 13.535 3.87578 12.5479L3.75074 12.2667C3.55185 11.8054 3.19185 11.4321 2.73791 11.2167L2.45657 11.0917C1.46919 10.6467 1.0003 9.50912 1.38747 8.49793L1.49376 8.21043C1.67519 7.74412 1.67519 7.22675 1.49376 6.76044L1.38747 6.47294C1.0003 5.46175 1.46919 4.32417 2.45657 3.87918L2.73791 3.75418C3.18532 3.54797 3.54446 3.18895 3.75074 2.74168L3.89454 2.46043C4.34016 1.46346 5.49104 0.992802 6.50788 1.39168L6.79548 1.49793C7.26194 1.67931 7.77948 1.67931 8.24594 1.49793L8.53354 1.39168C9.54505 1.00464 10.683 1.47337 11.1281 2.46043L11.2532 2.74168C11.4594 3.18895 11.8186 3.54797 12.266 3.75418L12.5473 3.89793C13.5347 4.34292 14.0036 5.4805 13.6164 6.49168L13.5101 6.77918ZM6.70803 9.59793L10.2217 6.08543C10.3368 5.96471 10.3368 5.7749 10.2217 5.65418L9.89031 5.32293C9.76876 5.20383 9.57422 5.20383 9.45267 5.32293L6.48921 8.28543L5.55141 7.35418C5.49468 7.29376 5.41548 7.25948 5.33259 7.25948C5.24969 7.25948 5.17049 7.29376 5.11377 7.35418L4.78241 7.68543C4.72323 7.74411 4.68994 7.82398 4.68994 7.90731C4.68994 7.99063 4.72323 8.07051 4.78241 8.12918L6.27039 9.59793C6.32712 9.65836 6.40632 9.69263 6.48921 9.69263C6.5721 9.69263 6.6513 9.65836 6.70803 9.59793Z" fill="#6171FF"></path></svg></h4></div><span class="d-block">{{ $item->specialization }}</span><span class="d-block">Available {{ $item->working_hours }} hrs/week</span></div></div>
          </div>
          <div class="col-md-6">
            <div class="mb-4 MatchedAssistant_VideoContainer__C4b_I">
              <div class="mb-3 ProfileVideo_ProfileVideo__39eUs" data-testid="ProfileVideo">
                <div class="ProfileVideo_LoomVideo__3zFCK">
                  <input type="hidden" id="phpVar" value={{ $item->id }} >
                  {{-- <iframe src={{ $item->video }} frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="" data-lf-yt-playback-inspected-p1e024b63yx4gb6d="true"></iframe> --}}
                </div>
              </div>
            </div>
          </div>

      </div>
      <div class="row">

        <div class="d-inline-flex flex-wrap mb-4 Pills_Pills__2uuYA" data-testid="Pills">
          <div class="d-flex align-items-center Pills_Pill__2t3_Y" data-testid="Pill">
            {{ $item->skills }}
          </div>
        </div>

      </div>
      <div class="row">

        <div class="mb-4 AssistantProfile_AssistantProfile__YIxyc" data-testid="ProfileDescription"><h4>Nice to meet you, I'm {{ $item->firstname }} {{ $item->lastname }}!</h4><p>{{ $item->describe }}</p></div>

      </div>

      <div class="row">

        <div class="ProfileSkills_ProfileSkills__HTIOW AssistantProfile_AssistantProfile__YIxyc" data-testid="ProfileSkills">
          <div class="mb-4 ProfileSkills_View__2N2lP">
            <h4>Skills</h4>
            <div>
              <div class="row no-gutters ProfileSkills_ProgressBarContainer__eU_ZK" data-testid="ProgressBar">
                <div class="d-flex col-12 justify-content-between">
                  <span>Excel/Spreadsheet upkeeping</span>
                  <span>Expert</span>
                </div>
                <div class="col-12 my-2">
                  <div class="progress ProfileSkills_ProgressBar__75ATq">
                    <div class="progress-bar ProfileSkills_Progress__1Aad6 ProfileSkills_Percent100__1tbg2">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ViewMore_ViewMore__FTmd8"></div>
          </div>
        </div>

      </div>

    </div>
    @endforeach
  </div>
</body>
</html>

<script>

$(document).ready(function(){

$(".buddy").on("swiperight",function(){

  var _phpvar = $('#phpVar').val();
  window.location.assign('/chat/'+_phpvar)
   <form action="/chat" method="post">
   @csrf
    <input type="hidden" value="_phpvar">
   </form>

});  

$(".buddy").on("swipeleft",function(){
$(this).addClass('rotate-right').delay(700).fadeOut(1);
$('.buddy').find('.status').remove();
$(this).append('<div class="status dislike">Dislike!</div>');

if ( $(this).is(':last-child') ) {
 $('.buddy:nth-child(1)').removeClass ('rotate-left rotate-right').fadeIn(300);
  // alert('OUPS');
 } else {
    $(this).next().removeClass('rotate-left rotate-right').fadeIn(400);
} 
});

});

</script>