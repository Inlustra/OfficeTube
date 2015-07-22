app.config(function ($stateProvider) {
    $stateProvider
        .state('login', {
            url: '/login',
            templateUrl: 'views/login',
            controller:'LoginController'
        });
});