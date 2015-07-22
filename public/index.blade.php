<!DOCTYPE html>
<html>
    <head>
        <title>VotePlay - @yield('title')</title>
        <!-- bower:css -->
        <link rel="stylesheet" href="bower_components/materialize/bin/materialize.css" />
        <!-- endbower -->
        <link rel="stylesheet" href="{{ elixir("css/app.css") }}"/>
        <link rel="stylesheet" href="{{ elixir("css/main.css") }}"/>
        <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body ng-app="VotePlay">
        <menu></menu>
        <main class="fill" ui-view></main>
        <!-- bower:js -->
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/angular/angular.js"></script>
        <script src="bower_components/angular-ui-router/release/angular-ui-router.js"></script>
        <script src="bower_components/angular-aria/angular-aria.js"></script>
        <script src="bower_components/angular-animate/angular-animate.js"></script>
        <script src="bower_components/angular-route/angular-route.js"></script>
        <script src="bower_components/angular-messages/angular-messages.js"></script>
        <script src="bower_components/materialize/bin/materialize.js"></script>
        <!-- endbower -->

        <!-- build:js(public) scripts/app.js -->
        <script src="scripts/app/app.js"></script>
        <script src="scripts/app/config.js"></script>

        <script src="scripts/app/main/main.js"></script>
        <script src="scripts/app/main/main.controller.js"></script>

        <script src="scripts/app/menu/menu.controller.js"></script>
        <script src="scripts/app/menu/menu.js"></script>

        <script src="scripts/app/signup/signup.js"></script>
        <script src="scripts/app/signup/signup.controller.js"></script>

        <script src="scripts/app/login/login.js"></script>
        <script src="scripts/app/login/login.controller.js"></script>

        <script src="scripts/app/run.js"></script>
        <!-- endbuild -->
    </body>

</html>