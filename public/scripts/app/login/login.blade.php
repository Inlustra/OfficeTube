<section class="fill bg tfg">
    <div class="fill valign-wrapper">
        <div class="container valign">
            <div class="bgl pam login-box text-foreground z-depth-3">
                <div class="center">
                    <h1 class="">Login to Vote<span class="tma">Play</span>! </h1>
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
                                    <a class="btn ma malh tfg">Login</a>
                                    <a class="btn-flat waves-effect waves-light tsa tsag20"
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
