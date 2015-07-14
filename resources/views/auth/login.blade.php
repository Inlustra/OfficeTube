@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('main')
    <dov class="valign-wrapper fill blue-grey lighten-4">
        <div class="valign center-block">
            <div class="grey darken-4 white-text">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
            </div>
        </div>
    </dov>

@endsection

@section('footer')
    @parent
@endsection


@section('script')

@endsection

