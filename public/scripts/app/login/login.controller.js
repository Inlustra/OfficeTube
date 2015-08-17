app.controller('LoginController', function ($scope, $auth, Auth) {
    var quotes = [""];
    $scope.randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
    $scope.auth = $auth;

    $scope.user = {}

    $scope.authenticate = function (provider) {
        Auth.authenticate(provider).then(function (user) {

        }, function (error) {
        });
    }

    $scope.login = function () {
        Auth.login($scope.user).then(function (user) {

        }, function (error) {

        })
    }

});