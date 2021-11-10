<link rel="stylesheet" href="{{ asset('/assets/css/chattasks.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


<div class="task-outer-div">

    <div class="tasksidea">
    <h1 id="backtasks" onclick="backtasks()">Explore Task Ideas</h1>

    <div id="outer-tasks" class="container h-100" style="display: block">
       
        <div class="row ">
            @foreach ($catdata as $catetitle)
          <div class="col-md-6 column">
            <a id="covid" onclick="tasks1({{ $catetitle->id }})">
                <div id="covid" class="card gr-{{ $catetitle->id }}">
                    <div class="txt">
                        <h3>{{ $catetitle->title }}</h3>
                    </div>
                    <div class="ico-card">
                        {{-- <i class="fa fa-codepen"></i> --}}
                        <img src="https://getmagic.com/wp-content/uploads/large-explore-icon-health.svg" alt="">
                    </div>
                </div>
            </a>
          </div>
          @endforeach
          
        </div>

        
      </div>
    
      <div class="model" data-role="popup" id="popupDialog" data-overlay-theme="b" data-theme="b" data-dismissible="true" style="display:none">
            <div data-role="header">
            <h1 class="task_txt">Start A Task</h1>
            </div>
            <form action="task_submit" method="post">
                @csrf
                <div role="main" class="ui-content">
                    <input type="text" name="task_name" class="inputmodal"><br><br>
                    <input type="hidden" name="task_id" class="hiddenmodal">
                </div>
                <div style="inline-block">
                    <button class="btn btn-success" style="width: 49%">Submit</button>
                
            </form>
            <button class="btn btn-danger" style="width: 49%" onclick="cancel()">Cancel</button>
        </div>
        </div>
    
      @foreach ($catdata as $catefind)
    <div id="inner-tasks{{ $catefind->id }}" class="backstep container h-100" style="display: none">

        <div id="backstep" class="row">
        
            @foreach ($data as $task)
                @if ($task->category_id == $catefind->id )
                    <div class="col-md-6 column ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-delete ui-btn-icon-left ui-btn-b" href="#popupDialog" data-rel="popup" data-position-to="window" data-transition="pop">
                        <div id="abc"  class="abc card gr-{{ $task->category_id }}">
                            <div class="txt">
                                <h3 id="test{{ $task->id }}" onclick="inputdata({{ $task->id }})">{{ $task->title }}</h3>
                            </div>
                            <div class="ico-card">
                                <img src="https://getmagic.com/wp-content/uploads/large-explore-icon-crown.svg" alt="">
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            
        </div>

      </div>
      @endforeach
    </div>

    </div>

</div>

<script>

    function tasks1($id)
    {
        document.getElementById("inner-tasks"+ $id).style.display = "block";
        document.getElementById("outer-tasks").style.display = "none";
    }

    // function backtasks()
    // {
    //     document.getElementById("outer-tasks").style.display = "block";
    //     document.getElementById("inner-tasks").style.display = "none";
    // } 

    $("#backtasks").on("click",function(){

        $("#outer-tasks").css("display","block");
        $(".backstep").css("display","none");
        $(".model").css("display","none");

    });
        
    function inputdata($id){
        $("#popupDialog").css("display","block");
        var data = $("#test"+$id).text();
        var _id = $id;
        $(".hiddenmodal").val(function() {
            return _id;
        });
        $(".inputmodal").val(function() {
            return data;
        });
    }

    function cancel(){
        document.getElementById("popupDialog").style.display = "none";
    }

</script>

<style>

    .model{
        z-index: 999999999999999 !important;
        position: absolute;
        background-color: whitesmoke;
        width: 600px !important;
        top: 200px;
        display: block;
        border-radius: 11%;
    }

    .inputmodal{
        border-radius: 25px;
        background: url(paper.gif);
        background-position: left top;
        background-repeat: repeat;
        padding: 20px;
        width: 305px;
        height: 54px;
    }

    .tasksidea{
        height: 100%;
    }

</style>