app.service('AuthService', function ($q, $rootScope, $localStorage, User) {

    $rootScope.currentUser = $localStorage.currentUser || null;

    $rootScope.$watch('currentUser', function () {
        $localStorage.currentUser = $rootScope.currentUser;
    });

    $rootScope.$watch(function () {
        return angular.toJson($localStorage);
    }, function () {
        var currentUser = $localStorage.currentUser;
        if (jQuery.isEmptyObject(currentUser)) {
            $rootScope.currentUser = null;
            return;
        }
        $rootScope.currentUser = User.build(currentUser);
    });

    return this;
}).run(function ($rootScope, UserFactory) {
    $rootScope.$on('auth.login', function () {
        UserFactory.getUser().then(function (user) {
            console.log("LOGIN");
            console.log(user);
            $rootScope.currentUser = user;
        }, function (error) {
            console.log(error);
            $rootScope.currentUser = null;
        });
    });
    $rootScope.$on('auth.logout', function () {
        $rootScope.currentUser = null;
    });
});