app.factory('AuthService', function ($q, UserFactory, $rootScope) {
    var currentUser = null;

    function isLoggedIn() {
        return angular.isDefined(currentUser) && !jQuery.isEmptyObject(currentUser) &&
            currentUser !== null;
    }

    function getUser() {
        var defer = $q.defer();
        if (angular.isDefined(currentUser) && currentUser !== null) {
            defer.resolve(currentUser);
        } else {
            UserFactory.getUser().success(function (user) {
                defer.resolve(user);
            });
        }
        return defer.promise;
    }

    function userUpdate() {
        getUser().then(function (user) {
            if (jQuery.isEmptyObject(user) || !angular.isDefined(user)) {
                if (isLoggedIn()) {
                    $rootScope.$broadcast('auth.logout', currentUser);
                }
                currentUser = null;
                return;
            }
            if (!isLoggedIn()) {
                $rootScope.$broadcast('auth.login', user);
            }
            currentUser = user;
        }, function (reason) {
            currentUser = null;
        });
    }

    return {
        login: function () {
        },
        logout: function () {
        },
        isLoggedIn: isLoggedIn,
        check: userUpdate,
        user: currentUser
    };
});