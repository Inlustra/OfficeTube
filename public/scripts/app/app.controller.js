app.controller('AppController', function ($scope, $rootScope) {
    $rootScope.$on('auth.login', function (event, data) {
        $scope.isLoggedIn = true;
    });
});