app.config(function ($interpolateProvider, $urlRouterProvider, $mdThemingProvider) {
    $mdThemingProvider.theme('default')
        .primaryPalette('pink')
        .accentPalette('teal')
        .warnPalette('red')
        .backgroundPalette('blue-grey', {'default': '50'})
});