<!DOCTYPE html>
<html ng-app="VotePlay">
    <head>
        <title>VotePlay - @yield('title')</title>
        <!-- bower:css -->
        <link rel="stylesheet" href="bower_components/materialize/bin/materialize.css" />
        <link rel="stylesheet" href="bower_components/angular-loading-bar/build/loading-bar.css" />
        <!-- endbower -->
        <link rel="stylesheet" href="{{ elixir("css/app.css") }}"/>
        <link rel="stylesheet" href="{{ elixir("css/main.css") }}"/>
        <link rel="stylesheet" href="{{ elixir("css/minimal-form.css") }}"/>
        <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body ng-controller="AppController">
        <menu ng-if="isLoggedIn()"></menu>
        <user-experience ng-if="isLoggedIn()"></user-experience>
        <main class="fill" ng-class="{push: isLoggedIn()}" ui-view></main>
        <!-- bower:js -->
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/angular/angular.js"></script>
        <script src="bower_components/angular-ui-router/release/angular-ui-router.js"></script>
        <script src="bower_components/angular-aria/angular-aria.js"></script>
        <script src="bower_components/angular-animate/angular-animate.js"></script>
        <script src="bower_components/angular-route/angular-route.js"></script>
        <script src="bower_components/angular-messages/angular-messages.js"></script>
        <script src="bower_components/materialize/bin/materialize.js"></script>
        <script src="bower_components/angular-loading-bar/build/loading-bar.js"></script>
        <script src="bower_components/ngstorage/ngStorage.js"></script>
        <script src="bower_components/satellizer/satellizer.js"></script>
        <!-- endbower -->

        <!-- build:js(public) scripts/app.js -->
        <script src="scripts/component/jsutils.js"></script>

        <script src="scripts/app.js"></script>
        <script src="scripts/config/config.js"></script>
        <script src="scripts/config/auth.js"></script>

        <script src="scripts/component/constants/apibaseurl.js"></script>

        <script src="scripts/component/auth/auth.js"></script>

        <script src="scripts/app/app.controller.js"></script>

        <script src="scripts/component/minimal-form/minimal-form.directive.js"></script>
        <script src="scripts/component/user-experience/user-experience.controller.js"></script>
        <script src="scripts/component/user-experience/user-experience.directive.js"></script>


        <script src="scripts/component/entity/user.factory.js"></script>

        <script src="scripts/app/main/main.js"></script>
        <script src="scripts/app/main/main.controller.js"></script>

        <script src="scripts/app/menu/menu.controller.js"></script>
        <script src="scripts/app/menu/menu.js"></script>

        <script src="scripts/app/signup/signup.js"></script>
        <script src="scripts/app/signup/signup.controller.js"></script>

        <script src="scripts/app/login/login.js"></script>
        <script src="scripts/app/login/login.controller.js"></script>

        <script src="scripts/run.js"></script>
        <!-- endbuild -->
    </body>

</html>