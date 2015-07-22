<!DOCTYPE html>
<html>
<head>
    <title>VotePlay - @yield('title')</title>
    <!-- bower:css -->
    <link rel="stylesheet" href="bower_components/angular-material/angular-material.css" />
    <!-- endbower -->
</head>
<body ng-app="VotePlay">
  <section layout="row" flex="" layout-fill>
        <menu></menu>
        <div ui-view></div>
    </section>
    <!-- bower:js -->
    <script src="bower_components/angular/angular.js"></script>
    <script src="bower_components/angular-animate/angular-animate.js"></script>
    <script src="bower_components/angular-aria/angular-aria.js"></script>
    <script src="bower_components/angular-material/angular-material.js"></script>
    <script src="bower_components/angular-ui-router/release/angular-ui-router.js"></script>
    <script src="bower_components/angular-route/angular-route.js"></script>
    <script src="bower_components/angular-messages/angular-messages.js"></script>
    <!-- endbower -->

    <!-- build:js(public) scripts/app.js -->
    <script src="scripts/app/app.js"></script>
    <script src="scripts/app/config.js"></script>

    <script src="scripts/components/themes/default.js"></script>

    <script src="scripts/app/main/main.js"></script>
    <script src="scripts/app/main/main.controller.js"></script>

    <script src="scripts/app/menu/menu.controller.js"></script>
    <script src="scripts/app/menu/menu.js"></script>

    <script src="scripts/app/run.js"></script>
    <!-- endbuild -->
</body>

</html>