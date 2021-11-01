@include('header')

<link rel="stylesheet" href="{{ asset('/assets/css/signup.css') }}">
<script src="{{ asset('/assets/js/signup.js') }}"></script>

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
            <a href="/login"><input type="submit" name="" value="Login"/></a><br/>
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Register your profile here</h3>
                    <form action="/rigsterc" method="post">
                        @csrf
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="firstname" class="form-control" placeholder="First Name *" value="" />
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password *" value="" />
                                </div>

                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="" />
                                </div>

                                <div id="referral"  style="display: none">
                                    <div class="form-group">
                                        <input type="text" name="ref_name" class="form-control" placeholder="Referral name *" value="" />
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" name="hearing" id="">
                                            <option value="">Where are you hear about that</option>
                                            <option value="1">Not applicable</option>
                                            <option value="2">Facebook group</option>
                                            <option value="3">Facebook/Instagram ad</option>
                                            <option value="4">Indeed</option>
                                            <option value="5">JobStreet</option>
                                            <option value="6">Kalibrr</option>
                                            <option value="7">Linkdin</option>
                                            <option value="8">OnlineJobs.ph</option>
                                            <option value="9">Referral</option>
                                            <option value="10">Other</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastname" placeholder="Last Name *" value="" />
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email *" value="" />
                                </div>
                                
                                <div class="form-group">
                                    <select class="form-control" onchange="checktype(this);" name="user_type" id="">
                                        <option value="">Select Your Profile</option>
                                        <option value="1">Assistant</option>
                                        <option value="2">Find assistants</option>
                                        <option value="3">Chat With Support</option>
                                    </select>
                                </div>

                                <div id="referral-email" class="form-group" style="display: none">
                                    <input type="email" class="form-control" name="ref_email" placeholder="Referral email *" value="" />
                                </div>
                                
                                <input type="submit" class="btnRegister"  value="Register"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
