app.factory('AuthService', function ($q, userFactory) {

    var currentUser = null;

    function getUser() {
        var defer = $q.defer();
        if (currentUser == null)
            defer.resolve(currentUser);
        else
            userFactory.getUser().success(function (user) {
                defer.resolve(user);
            });
        return defer.promise;
    }

    function userUpdate() {
        getUser().then(function (user) {
            this.currentUser = user;
        }, function (reason) {
            this.currentUser = null;
        });
    }

    return {
        login: function () {
        },
        logout: function () {
        },
        isLoggedIn: function () {
        },
        check: userUpdate(),
        currentUser: currentUser
    };
});