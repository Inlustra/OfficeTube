<section class="fill background darken-4 text-foreground">
    <div class="fill valign-wrapper ">
        <div class="container valign">
            <div class="background darken-3 login-box text-background pal text-lighten-3">
                <div class="center pvl">
                    <h2 class="">Welcome to Vote<span class="text-mainAccent text-accent-4">Play</span>! </h2>
                    <span>Just a few questions to get to know you!</span>
                </div>
                <section class="container minimal-form">
                    <form novalidate name="myForm" class="background darken-4 pam">
                        <div class="minimal-form-input input-field col s12">
                            <input id="Full-Name" type="text" class="mbs validate" required>
                            <label class="active" for="Full-Name">Full Name</label>
                        </div>
                        <div class="minimal-form-input input-field col s12" required>
                            <input id="Email" type="email" class="mbs validate">
                            <label class="active" for="Email">Email</label>
                        </div>
                        <div class="minimal-form-input input-field col s12" required>
                            <input id="Email" type="email" class="mbs validate">
                            <label class="active" for="Email">Email</label>
                        </div>
                        <button class="minimal-form-button btn btn-flat text-mainAccent waves-effect" ng-click="next()">
                            <i class="material-icons">play_arrow</i>
                        </button>
                    </form>
                    <div class="minimal-form-progress-container pvn background darken-4">
                        <div class="minimal-form-progress mainAccent background"></div>
                    </div>
                    <div class="minimal-form-questions text-background text-lighten-1 darken-2 pam">0/3</div>
                    <div class="minimal-form-end">
                        <h3 class="center">
                            <div class="preloader-wrapper big active">
                                <div class="spinner-layer spinner-blue">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="gap-patch">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>

                                <div class="spinner-layer spinner-red">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="gap-patch">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>

                                <div class="spinner-layer spinner-yellow">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="gap-patch">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>

                                <div class="spinner-layer spinner-green">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="gap-patch">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                        </h3>
                    </div>
                </section>
            </div>
            <!-- /container -->
        </div>
    </div>
</section>