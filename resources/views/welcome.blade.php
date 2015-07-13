@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('main')
    <div class="section light-blue white-text no-pad-bot">
    <div class="container">
        <h1>Vote<strong class="lime-text text-accent-3">Play</strong></h1>
    </div>
    <div class="row">
         <div class="col s12 center">
            <h4>Collaborative music anyone?</h4>
         </div>
        </div>
    <div class="container">
    <div class="row">
     <div class="col m4 s12 center">
        <i class="material-icons large glow">play_circle_outline</i>
        <p class="light-blue-text text-accent-1">
          <strong class="light-blue-text text-lighten-5">Gather</strong> music from the sources you love: YouTube, Soundcloud...
        </p>
     </div>
     <div class="col m4 s12 center">
        <i class="material-icons large glow">question_answer</i>
        <p class="light-blue-text text-accent-1">
          <strong class="light-blue-text text-lighten-5">Chat</strong> with people who like the same music as you!
        </p>
     </div>
     <div class="col m4 s12 center">
        <i class="material-icons large glow">queue_music</i>
        <p class="light-blue-text text-accent-1">
            <strong class="light-blue-text text-lighten-5">Discover</strong> new music, loved by others in the same room!
        </p>
     </div>

    </div>
    </div>
    <div class="title">Laravel Auto Build Test</div>
    </div>

@endsection

