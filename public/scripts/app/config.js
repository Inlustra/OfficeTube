/**
 * Created by thomas on 22/07/15.
 */
app.config(function ($interpolateProvider, $urlRouterProvider, $mdThemingProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
    $urlRouterProvider.otherwise("/");
});