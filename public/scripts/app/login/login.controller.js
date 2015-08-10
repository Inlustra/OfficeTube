app.controller('LoginController', function($scope, $auth) {
    var quotes = [""];
    $scope.randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
    $scope.auth = $auth;

    $scope.authenticate = function(provider) {
        $auth.authenticate(provider);
    };

});