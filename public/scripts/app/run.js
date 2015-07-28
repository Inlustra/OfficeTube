/**
 * Created by thomas on 22/07/15.
 */
app.run(function ($rootScope) {
    $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams, error){
        console.log(event);
        console.log(fromState);
        console.log(toState);
    });
});
