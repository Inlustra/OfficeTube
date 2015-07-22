app.config(function ($stateProvider) {

}).directive('menu', function() {
    return {
        replace: true,
        restrict: 'E',
        templateUrl: "/views/menu",
        controller:'MenuController'
    };
});