@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('main')
    <script src="{{url('build/js/modernizr.custom.js')}}"></script>
    <section>
        <div class="fill background darken-4 text-foreground">
            <div class="fill valign-wrapper ">
                <div class="container valign">
                    <div class="background darken-3 login-box text-background text-lighten-3">
                        <div class="center">
                            <h1 class="">Welcome to Vote<span class="text-mainAccent text-accent-4">Play</span>! </h1>
                            <span>A few questions, if you don't mind...</span>
                        </div>
                        <section>
                            <form id="theForm" class="simform " autocomplete="off">
                                <div class="simform-inner">
                                    <ol class="questions">
                                        <li>
                                            <span><label for="q1">What's your favorite movie?</label></span>
                                            <input class="text-background text-lighten-3" id="q1" name="q1"
                                                   type="text"/>
                                        </li>
                                        <li>
                                            <span><label for="q2">Where do you live?</label></span>
                                            <input id="q2" name="q2" type="text"/>
                                        </li>
                                        <li>
                                            <span><label for="q3">What time do you got to work?</label></span>
                                            <input id="q3" name="q3" type="text"/>
                                        </li>
                                        <li>
                                            <span><label for="q4">How do you like your veggies?</label></span>
                                            <input id="q4" name="q4" type="text"/>
                                        </li>
                                        <li>
                                            <span><label for="q5">What book inspires you?</label></span>
                                            <input id="q5" name="q5" type="text"/>
                                        </li>
                                        <li>
                                            <span><label for="q6">What's your profession?</label></span>
                                            <input id="q6" name="q6" type="text"/>
                                        </li>

                                        <li>
                                            <span><label for="q7">What's your profession?</label></span>
                                            <input id="q7" name="q7" type="text"/>
                                        </li>

                                        <li>
                                            <span><label for="q8">What's your profession?</label></span>
                                            <input id="q8" name="q8" type="text"/>
                                        </li>

                                        <li>
                                            <span><label for="q9">What's your profession?</label></span>
                                            <input id="q9" name="q9" type="text"/>
                                        </li>

                                        <li>
                                            <span><label for="q10">What's your profession?</label></span>
                                            <input id="q10" name="q10" type="text"/>
                                        </li>
                                    </ol>
                                    <!-- /questions -->
                                    <button class="next show"></button>
                                    <button class="submit" type="submit">Send answers</button>
                                    <div class="controls">
                                        <div class="progress"></div>
            							<span class="number">
            								<span class="number-current"></span>
            								<span class="number-total"></span>
            							</span>
                                        <span class="error-message"></span>
                                    </div>
                                    <!-- / controls -->
                                </div>
                                <!-- /simform-inner -->
                                <span class="final-message"></span>
                            </form>
                            <!-- /simform -->
                        </section>
                    </div>
                    <!-- /container -->
                </div>
            </div>
            <script src="{{url('build/js/classie.js')}}"></script>
            <script src="{{url('build/js/stepsForm.js')}}"></script>
            <script>
                var theForm = document.getElementById('theForm');

                new stepsForm(theForm, {
                    onSubmit: function (form) {
                        classie.addClass(theForm.querySelector('.simform-inner'), 'hide');
                        /*
                         form.submit()
                         or
                         AJAX request (maybe show loading indicator while we don't have an answer..)
                         */
                        var messageEl = theForm.querySelector('.final-message');
                        messageEl.innerHTML = 'Thank you! We\'ll be in touch.';
                        classie.addClass(messageEl, 'show');
                    }
                });
            </script>
        </div>
    </section>
@endsection

@section('footer')
    @parent
@endsection


@section('script')

@endsection

