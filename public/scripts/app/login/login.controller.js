app.controller('LoginController', function($scope) {
    var quotes = [""];
    $scope.randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
});