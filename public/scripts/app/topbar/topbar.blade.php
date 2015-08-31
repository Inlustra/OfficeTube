<div>
    <nav class="bg tfg fillw">
        <div class="nav-wrapper container">
            <a class="left valign-wrapper fillh" href="#">
                <img class="logo valign" src="{{asset('img/logo.png')}}"/>
                <h4>
                    <span class="tfg">Vote</span><strong class="tma">Play</strong>
                </h4>
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
            </ul>
            <ul class="right hide-on-med-and-down fillh" ng-show="$root.currentUser">
                <li class="fillh">
                    <a href="#" class="fillh dropdown-button" href="#!" data-activates="dropdown"
                       data-beloworigin="true">
                        <div class="fillh valign-wrapper">
                            <img class="circle responsive-img valign" ng-src="{[{$root.currentUser.avatar}]}" src=""/>
                            {[{$root.currentUser.name}]}
                        </div>
                    </a>

                    <ul id="dropdown" class="fillw dropdown-mini-content bgl">
                        <li class="bgl bgllh">
                            <a href="#">
                                <i class="material-icons tiny">perm_identity</i> Profile
                            </a>
                        </li>
                        <li class="bgl bgllh" ng-click="logout()">
                            <a href="#">
                                <i class="material-icons tiny">power_settings_new</i> Sign out
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="material-icons">
                            chat_bubble_outline
                        </i>
                    </a>
                </li>
            </ul>
            <ul class="right hide-on-med-and-down fillh" ng-if="!$root.currentUser">
                <li class="fillh">
                    <a href="#" class="fillh" ng-click="toggleLogin()">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="divider bgll"></div>
    <reveal when="showLogin" class="fillw bgl">
        <div class="container">
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
                        <a href="#" ng-click="authenticate('soundcloud')">
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
        </div>
        <div class="divider bgll"></div>
    </reveal>
    <reveal when="!isUserComplete()" style="display:block;">
        <section class="minimal-form container pan">
            <form novalidate name="myForm" class="bg pam">
                <div class="minimal-form-input input-field col s11" ng-if="userClone.needsFullName()" required>
                    <input id="Full-Name" type="text" class="plm tfg mbs validate" ng-model="$root.currentUser.fullname" required>
                    <label class="active" for="Full-Name">What's your name?</label>
                </div>
                <div class="minimal-form-input input-field col s11" ng-if="userClone.needsName()" required>
                    <input id="Name" type="text" class="plm tfg mbs validate" ng-model="$root.currentUser.name" required>
                    <label class="active" for="Name">What should we call you?</label>
                </div>
                <div class="minimal-form-input input-field col s11" ng-if="userClone.needsEmail()" required>
                    <input id="Email" type="email" class="plm tfg mbs validate" ng-model="$root.currentUser.email" required>
                    <label class="active" for="Email">Where can we reach you? (E-mail)</label>
                </div>

                <button class="minimal-form-button btn btn-flat tsa tsag20 bgh waves-effect" ng-click="next()">
                    <i class="material-icons">play_arrow</i>
                </button>
            </form>
            <div class="minimal-form-progress-container pvn bg">
                <div class="minimal-form-progress bgll"></div>
            </div>
        </section>
        <div class="divider bgll"></div>
    </reveal>
</div>