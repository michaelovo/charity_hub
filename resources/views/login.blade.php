@extends('layouts.master')
@section('nav')
      @include('layouts.nav')
@endsection
@section('page_contents')
<div class="inner-bg">
              <div class="container"  style="background-color:#ffffff">

                                     <div class="row"  >
                      <div class="col-sm-5">

                        <div class="form-box" >
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>Login</h3>
                                <p>Enter username and password to log on:</p>
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-key"></i>	                        		</div>
                            </div>
                            <div class="form-bottom">
                          <form role="form" action="" method="post" class="login-form">
                            <div class="form-group">
                              <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
                              </div>
                              <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                              </div>
                              <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Sign in! </button>
                          </form>
                        </div>
                      </div>

                    <div class="social-login">
                          <h3>...or login with:</h3>
                          <div class="social-login-buttons">
                            <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                              <i class="fa fa-facebook"></i> Facebook		                        	</a>
                            <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                              <i class="fa fa-twitter"></i> Twitter		                        	</a>
                            <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                              <i class="fa fa-google-plus"></i> Google Plus		                        	</a>	                        	</div>
                        </div>
                      </div>

                      <div class="col-sm-1 middle-border"></div>
                      <div class="col-sm-1"></div>

                      <div class="col-sm-5">

                        <div class="form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>Sign up now</h3>
                                <p>Fill in the form below to get instant access:</p>
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-pencil"></i>	                        		</div>
                            </div>
                            <div class="form-bottom">
                          <form role="form" action="" method="post" class="registration-form">
                            <div class="form-group">
                              <label class="sr-only" for="form-first-name">First name</label>
                                <input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                              </div>
                              <div class="form-group">
                                <label class="sr-only" for="form-last-name">Last name</label>
                                <input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                              </div>
                              <div class="form-group">
                                <label class="sr-only" for="form-email">Email</label>
                                <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                              </div>
                              <div class="form-group">
                                <label class="sr-only" for="form-about-yourself">About yourself</label>
                                <textarea name="form-about-yourself" placeholder="About yourself..."
                                      class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                              </div>
                              <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Sign up! </button>
                          </form>
                        </div>
                        </div>
                      </div>
                  </div>

              </div>
          </div>
          @endsection
          @section('footer')
            @include('layouts.footer')
          @endsection
