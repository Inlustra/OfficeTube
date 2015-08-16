app.controller('LoginController', function ($scope, $auth, $rootScope) {
    var quotes = [""];
    $scope.randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
    $scope.auth = $auth;

    $scope.authenticate = function (provider) {
        $auth.authenticate(provider).then(function (success) {
            $rootScope.$broadcast('auth.login');
        }, function (error) {
            $rootScope.$broadcast('auth.error');
        });
    };

});