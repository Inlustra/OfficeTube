app.config(function ($stateProvider) {
    $stateProvider
        .state('signup', {
            url: '/signup',
            templateUrl: 'views/signup',
            controller:'SignUpController'
        });
});