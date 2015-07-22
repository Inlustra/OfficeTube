app.config(function ($stateProvider) {
    $stateProvider
        .state('signup', {
            url: '/auth/signup/',
            templateUrl: 'views/signup',
            controller:'SignUpController'
        });
});