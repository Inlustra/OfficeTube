app.service('AuthService', function ($q, $rootScope) {

    $rootScope.currentUser = null;


    return this;
}).run(function ($rootScope, $localStorage, UserFactory, $auth) {
    function refreshUser() {
        UserFactory.getUser().then(function (user) {
            console.log(user);
            $rootScope.currentUser = user;
        }, function (error) {
            console.log(error);
            $rootScope.currentUser = null;
        });
    }

    if ($auth.isAuthenticated()) {
        refreshUser();
    }

    $rootScope.$on('auth.login', function () {
        refreshUser();
    });
    $rootScope.$on('auth.edit', function () {
        console.log("Set local storage2");
        console.log($rootScope.currentUser)
    });
    $rootScope.$on('auth.logout', function () {
        $rootScope.currentUser = null;
    });
});