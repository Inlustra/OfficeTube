app.config(function ($stateProvider) {
    $stateProvider
        .state('main', {
            url: '/',
            templateUrl: 'views/main',
            controller:'MainController'
        });
});