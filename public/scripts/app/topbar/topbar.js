app.config(function ($stateProvider) {

}).directive('topbar', function() {
    return {
        replace: true,
        restrict: 'E',
        templateUrl: "/views/topbar",
        controller:'TopbarController'
    };
});