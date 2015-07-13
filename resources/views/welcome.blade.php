@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('main')
    <div class="section purple darken-1  white-text">
    <div class="container">
        <h1>Vote<strong class="cyan-text text-accent-3">Play</strong></h1>
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
        <p class="purple-text text-accent-1">
          <strong class="purple-text text-lighten-5">Gather</strong> music from the websites you love: YouTube, Soundcloud...
        </p>
     </div>
     <div class="col m4 s12 center">
        <i class="material-icons large glow">question_answer</i>
        <p class="purple-text text-accent-1">
          <strong class="purple-text text-lighten-5">Chat</strong> with people who like the same music as you!
        </p>
     </div>
     <div class="col m4 s12 center">
        <i class="material-icons large glow">queue_music</i>
        <p class="purple-text text-accent-1">
            <strong class="purple-text text-lighten-5">Discover</strong> new music, loved by others in the same room!
        </p>
     </div>

    </div>
    </div>
    </div>
    <div class="section sign-up grey darken-3">
      <div class="container grey-text text-lighten-1">
        Sign up with YouTube or Soundcloud!
      <button class="btn-flat right waves-effect waves-light pink-text text-accent-2">
                      Sign up
              </button>

      </div>
    </div>
    <div class="section no-pad-top no-pad-bot parallax-image-section">
      <div class="parallax-container">
        <div class="parallax"><img src="img/backdrop.png"></div>
      </div>
    </div>

@endsection

@section('script')<script>
                      $(document).ready(function(){
                            $('.parallax').parallax();
                          });
                      </script>
@endsection

