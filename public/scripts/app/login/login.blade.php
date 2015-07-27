<section class="fill background text-foreground">
    <div class="fill valign-wrapper ">
        <div class="container valign">
            <div class="backgroundlight login-box text-foreground">
                <div class="center">
                    <h1 class="">Login to Vote<span class="text-mainAccent">Play</span>! </h1>
                    <span>[[randomQuote]]</span>
                </div>
                <section>
                    <form class="container">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="Email" type="email" class="validate">
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
                            <div class="col s12 m4">
                                <div class="left">
                                    <a href="{{ URL::route('auth.soundcloud') }}">
                                        <img src="http://connect.soundcloud.com/2/btn-connect-l.png"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col s12 m8">
                                <div class="right">
                                    <a class="btn">Login</a>
                                    <a class="btn btn-flat text-mainAccent text-accent-4 background"
                                       ui-sref="signup">Sign up</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <!-- /container -->
        </div>
    </div>
</section>
