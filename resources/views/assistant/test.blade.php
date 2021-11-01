<link rel="stylesheet" href="{{ asset('/assets/css/assistant/welcome.css') }}">
@include('assistant/navbar')

<style>
    .main{
        height: 553px;
    }
    .leftside {
        border-right: 1px solid #e3e4ef;
        width: 22%;
    }
    span.d-block.Sidebar_header__2SFYN.Sidebar_text__2Slze {
font-weight: 700;
font-size: 12px;
line-height: 24px;
letter-spacing: .05em;
width: 100%;
color: #8888b5;
padding-left: 20px;
}
.Sidebar_list__lXo7L {
list-style-type: none;
padding: 0 17px;
}
.Sidebar_active__9wFJE {
background: #e7eafb;
border-radius: 10px;
}
.Sidebar_item__NlFy1 {
padding: 6px 8px;
}

</style>
<link rel="stylesheet" href="{{ asset('/assets/css/assistant/quiz.css') }}">
<div class="row main bg-light">
    <div class="col-md-3 leftside">
        <span class="d-block Sidebar_header__2SFYN Sidebar_text__2Slze">My Portal</span>
        @include('assistant/leftsidebar')
    </div>
    <div class="col-md-9 rightside">
        <h3>Quiz</h3>
        <form action="/quizc" method="POST">  
            @csrf
            <div class=" quiz Questions_Questions__2lsLo" data-testid="Questions">
                <ul>
                    <?php $sr = 0; ?>
                   
                    @foreach ($data as $item)
                    
                   <?php
                   
                   $opt = $data[$sr]->options;
                            $pieces = explode("^^^", $opt); 
                    ?>
                    <li>
                        <div class="Questions_Question__1FdM0">
                            <div class="Questions_Container__ZOi93">
                                <header>{{ $item->question }}</header>
                                <ul>
                                    <?php $srq = 1; ?>
                                    @foreach ($pieces as $collection)
                                    <li>
                                        <div class="d-flex align-items-center  mb-2">
                                            <div class="RadioButton_RadioButton__2gX61">
                                                <input class="" name="que{{ $item->id }}" value={{ $srq }} type="radio">
                                            </div>
                                            <label class="RadioButton_Label__3PvDI mb-0 ml-3">
                                                {{ $collection }}
                                            </label>
                                        </div>
                                    </li>
                                    <?php  $srq++; ?>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                    <?php $sr++; 
                            ?>
                    @endforeach
                </ul>
                <button type="submit" name="submit" class="btn btn-danger btn-block">Cancel</button>
                <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
            </div>
        </form>     
    </div>
</div>
