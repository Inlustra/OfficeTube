@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('main')
		<script src="build/js/modernizr.custom.js"></script>
		<section>

            <div class="fill background darken-4 text-foreground">
    	    	<div class="fill valign-wrapper ">
                    <div class="container valign">
                        <div class="background darken-3 login-box text-background text-lighten-3">
                            <div class="center">
                                <h1 class="">Login to Vote<span class="text-mainAccent text-accent-4">Play</span>! </h1>
                                <span><"Quote of the day goes here"></span>
                            </div>
                            <section>
                                <form class="container">
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input  id="Email" type="email" class="validate">
                                      <label for="Email">Email</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input id="password" type="password" class="validate">
                                      <label for="password">Password</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                  <div class="col s12 m6">
                                  <div class="left">
                                    <a href="{{ URL::route('auth.soundcloud') }}">
                                      <img src="http://connect.soundcloud.com/2/btn-connect-l.png"/>
                                    </a>
                                  </div>
                                  </div>
                                  <div class="col s12 m6">
                                    <div class="right">
                                         <button class="btn ">Login</button>
                                         <button class="btn btn-flat text-mainAccent text-accent-4 background">Sign up</button>
                                      </div>
                                  </div>
                                  </div>
                                </form>
                            </section>
                        </div><!-- /container -->
            		</div>
    	    	</div>
            </div>
		</section>
@endsection

@section('footer')
    @parent
@endsection


@section('script')

@endsection

