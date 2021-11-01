{{-- <div class="container-fluid"> --}}


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
    <div class="row main bg-light">
        <div class="col-md-3 leftside">

            <span class="d-block Sidebar_header__2SFYN Sidebar_text__2Slze">My Portal</span>

            @include('assistant/leftsidebar')
            

        </div>

        <div class="col-md-9 rightside">
            
            <div id="first" class="first" style="display: block">
                @include('assistant/welcome') 
            </div>
            
            <div id="second"  class="second" style="display: none">
                @include('assistant/onboarding') 
            </div>

            <div id="profile"  class="profile" style="display: none">
                @include('assistant/profile') 
            </div>


            <div id="third" class="thrid" style="display: none">
                <link rel="stylesheet" href="{{ asset('/assets/css/assistant/intro.css') }}">
                <div class="content w-100"><div class="container-fluid container-xl container-lg my-0 mx-auto px-0 OnboardingPage_OnboardingPage__2dnR1" data-testid="OnboardingPage"><div class="OnboardingQuiz_OnboardingQuiz__1NRWb" data-testid="OnboardingQuiz"><h2>Test your Knowledge <small>Quiz 1 of 3</small></h2><div class="pt-2"></div><p>Review the following material carefully, then proceed to the next step below:</p><div class="pt-2"></div><div data-testid="QuizArticles1"><div class="OnboardingQuiz_Article__3wz3O"><div class="WpPost" data-testid="WpPost"><div data-testid="content"><h3 class="post-title" data-testid="post-title">Matching you with a Job</h3><p>If we find a job that fits your credentials, we’ll send you an email containing information on the potential job.</p>
                    <p>You will be asked to confirm your availability for the <a target="_blank" rel="noreferrer" href="https://getmagic.com/help/assistants/clientcall/">first call with a client</a>. You must confirm your availability to progress to the next step.</p>
                    <p>Matches are only confirmed once you have:</p>
                    <ol>
                    <li>Passed a screening call with Magic; and</li>
                    <li>Received the client’s approval after the call with them.</li>
                    </ol>
                    <p><!--more--></p>
                    <p>Learn more about <a target="_blank" rel="noreferrer" href="https://getmagic.com/help/assistants/matching/">the matching process</a> so you can be ready when clients select your profile.</p>
                    </div></div></div><div class="OnboardingQuiz_Article__3wz3O"><div class="WpPost" data-testid="WpPost"><div data-testid="content"><h3 class="post-title" data-testid="post-title">First Call with a Client</h3><p>Your first call with a client will introduce you to a potential job with them and provide you and the client an opportunity to get to know each other.</p>
                    <p>You will be asked to attend a preparatory call with a Magic representative 15 minutes before the call with the client.</p>
                    <p>Call agenda:</p>
                    <ul>
                    <li>Introductions</li>
                    <li>The tasks and responsibilities of the job</li>
                    <li>Expected time frame for the job</li>
                    <li>Management and communication styles</li>
                    </ul>
                    <p>You will be notified of the outcome (i.e. whether you will be working with the client or not) via email later on.</p>
                    <p>If the job is confirmed, you will also be informed of your start date, the schedule for the <a target="_blank" rel="noreferrer" href="https://getmagic.com/help/assistants/call/">onboarding call</a>, and your <a target="_blank" rel="noreferrer" href="https://getmagic.com/help/assistants/worksched/">scheduled hours</a>.</p>
                    </div>
                </div></div></div>
            <div class="pt-3"></div>
            <a href="/doquiz" class="OnboardingQuiz_Button__3UX2U">
                Proceed to Next Step
            </a>
        </div>
    </div>
</div>

            </div>





        </div>
    </div>
{{-- </div> --}}

<script>
    

    function welcome(){
      document.getElementById("first").style.display = "block";
      document.getElementById("second").style.display = "none";
      document.getElementById("third").style.display = "none";
    }
  
  </script>