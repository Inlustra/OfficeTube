app.controller('AppController', function ($scope, AuthService) {
    $scope.isLoggedIn = AuthService.isLoggedIn;
    console.log($scope);
});