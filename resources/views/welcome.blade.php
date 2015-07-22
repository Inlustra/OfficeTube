@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('main')
    <div class="section background lighten-4">
        <div class="container">
            <h1><span class="text-foreground text-darken-3">Vote</span><strong class="text-mainAccent text-accent-4">Play</strong>
            </h1>
        </div>
        <div class="row">
            <div class="col s12 center">
                <h4>Collaborative music anyone? <i class="material-icons"></i></h4>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col m4 s12 center">
                    <i class="material-icons large glow">play_circle_outline</i>

                    <p class="text-mainAccent text-accent-4">
                        <strong>Gather</strong> music from the websites you love:
                        YouTube, Soundcloud...
                    </p>
                </div>
                <div class="col m4 s12 center">
                    <i class="material-icons large glow">question_answer</i>

                    <p class="text-mainAccent  text-accent-4">
                        <strong>Chat</strong> with people who like the same music as
                        you!
                    </p>
                </div>
                <div class="col m4 s12 center">
                    <i class="material-icons large glow">queue_music</i>

                    <p class="text-mainAccent text-accent-4">
                        <strong>Discover</strong> new music, loved by others in the
                        same room!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section sign-up background darken-4">
        <div class="container text-foreground text-lighten-1">
            <div class="row">
                <div class="col s12 m6 center">
                    Sign up with YouTube or Soundcloud!
                </div>
                <div class="col s12 m6 center">
                    <a class="btn-flat waves-effect waves-light text-mainAccent text-accent-2" href="{{URL::route('auth.login')}}">
                        Sign up
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="section no-pad-top no-pad-bot parallax-image-section">
        <div class="parallax-container">
            <div class="parallax-content-wrapper white-text">
                <div class="parallax-content valign-wrapper center">
                    <div class="valign center-block">
                        <h4 class="">What are you waiting for?</h4>
                        <h5>
                            Join the revolution!
                        </h5>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="img/backdrop.png"></div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('.parallax').parallax();
        });
    </script>
@endsection

