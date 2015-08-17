app.service('Auth', function ($q, $rootScope, $localStorage, UserFactory, User, $auth) {

    $rootScope.currentUser = $localStorage.currentUser || null;

    $rootScope.$watch('currentUser', function () {
        $localStorage.currentUser = $rootScope.currentUser;
    });

    $rootScope.$watch(function () {
        return angular.toJson($localStorage);
    }, function () {
        console.log("Stored user change.");
        $rootScope.currentUser = $localStorage.currentUser;
    });

    function isLoggedIn() {
        return !!$rootScope.currentUser;
    }

    function authenticate(provider) {
        var deferred = $q.defer();
        $auth.authenticate(provider).then(this.tokenSuccess(deferred), this.tokenError(deferred));
        return deferred.promise;
    }

    function login(user) {
        var deferred = $q.defer();
        $auth.login(user).then(this.tokenSuccess(deferred), this.tokenError(deferred));
        return deferred.promise;
    }

    function tokenSuccess(deferred) {
        this.requestUser().then(function (user) { // Successfully fetched user
            this.storeUser(user);
            $rootScope.$broadcast('auth.login');
            deferred.resolve(user);
        }, function (error) { // Got token, error fetching user
            this.storeUser(null);
            $rootScope.$broadcast('auth.error', error);
            deferred.reject(error);
        });
        deferred.notify('Got token.');
    }

    function tokenError(deferred) {
        $rootScope.$broadcast('auth.error', error);
        deferred.reject(error);
    }

    function storeUser(user) {
        $rootScope.currentUser = user;
    }

    function requestUser() {
        return $q(function (resolve, reject) {
            UserFactory.getUser().success(function (user) {
                resolve(User.build(user));
            }).error(function (error) {
                reject(null);
            });
        });
    }

    function logout() {
        $rootScope.currentUser = null;
        $rootScope.$broadcast('auth.logout');
        $auth.logout();
    }

    return this;
});