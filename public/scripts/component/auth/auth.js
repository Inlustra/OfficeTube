app.service('AuthService', function ($q, $rootScope, $localStorage) {

    $rootScope.currentUser = $localStorage.currentUser || null;

    $rootScope.$watch('currentUser', function() {
        $localStorage.currentUser = $rootScope.currentUser;
    });

    $rootScope.$watch(function() {
        return angular.toJson($localStorage);
    }, function() {
        console.log("Stored user change.");
        $rootScope.currentUser = $localStorage.currentUser;
    });

    function isLoggedIn() {
        return !!$rootScope.currentUser;
    }

    return this;
}).run(function ($rootScope, UserFactory) {
    $rootScope.$on('auth.login', function () {
        UserFactory.getUser().success(function (user) {
            console.log('user');
            console.log(user);
            $rootScope.currentUser = user;
        }).error(function (error) {
            console.log(error);
            $rootScope.currentUser = null;
        });
    });
    $rootScope.$on('auth.logout', function () {
        $rootScope.currentUser = null;
    });
});