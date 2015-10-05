app.service('AuthService', function ($q, $rootScope, $localStorage, User) {

    $rootScope.currentUser = $localStorage.currentUser || null;

    $rootScope.$watch('currentUser', function () {
        $localStorage.currentUser = $rootScope.currentUser;
        console.log("set");
    });
    //TODO REMOVE AND REPLACE WITH STORAGE OF TOKEN INSTEAD
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
}).run(function ($rootScope, $localStorage, UserFactory) {
    function refreshUser() {
        UserFactory.getUser().then(function (user) {
            console.log("LOGIN");
            console.log(user);
            $rootScope.currentUser = user;
        }, function (error) {
            console.log(error);
            $rootScope.currentUser = null;
        });
    }
    $rootScope.$on('auth.login', function () {
        refreshUser();
    });
    $rootScope.$on('auth.edit', function () {
        $localStorage.currentUser = $rootScope.currentUser;
        console.log("Set local storage2");
        console.log($rootScope.currentUser)
        console.log("Set local storage");
        console.log($localStorage.currentUser)
    });
    $rootScope.$on('auth.logout', function () {
        $rootScope.currentUser = null;
    });
});