/**
 * Created by thomas on 22/07/15.
 */
app.run(function ($rootScope, AuthService) {
    $rootScope.$on('$stateChangeStart', function () {
        AuthService.check();
    });
});
