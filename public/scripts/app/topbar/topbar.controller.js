app.controller('TopbarController', function ($scope, $auth, $rootScope, UserFactory) {
    function init() {
        setTimeout(function () {
            $('.dropdown-button').dropdown({
                inDuration: 200,
                outDuration: 100
            });
        }, 0);
    }

    $scope.loginform = {email: "", password: ""};

    $scope.showLogin = false;

    $scope.toggleLogin = function () {
        $scope.showLogin = !$scope.showLogin;
    };

    $scope.logout = function () {
        $auth.logout();
        $rootScope.currentUser = null;
    };

    $scope.authenticate = function (provider) {
        handleResponse($auth.authenticate(provider));
    };

    $scope.login = function () {
        handleResponse($auth.login($scope.loginform));
    };

    function handleResponse(auth) {
        auth.then(function (success) {
            $rootScope.$broadcast('auth.login');
            $scope.showLogin = false;
            init();
        }, function (error) {
            $rootScope.$broadcast('auth.error');
        });
    }

    $scope.isUserComplete = function () {
        return !!$rootScope.currentUser ? $rootScope.currentUser.isComplete() : true;
    };

    $scope.finishEdits = function () {
        UserFactory.updateUser($rootScope.currentUser.edit).then(function (user) {
            $rootScope.currentUser = user;
            console.log("Edited!");
            console.log(user)
            $rootScope.$broadcast('auth.edit');
        }, function (error) {
            $rootScope.$broadcast('auth.error', error);
        });
    };


    init();
});