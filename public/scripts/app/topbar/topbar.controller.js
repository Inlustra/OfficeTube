app.controller('TopbarController', function ($scope, $auth, $rootScope, UserFactory) {
    function init() {
        setTimeout(function () {
            $('.dropdown-button').dropdown({
                inDuration: 200,
                outDuration: 100
            });
        }, 0);
    }

    $scope.showLogin = false;

    $scope.toggleLogin = function () {
        $scope.showLogin = !$scope.showLogin;
    };

    $scope.logout = function () {
        $auth.logout();
        $rootScope.currentUser = null;
    };

    $scope.authenticate = function (provider) {
        $auth.authenticate(provider).then(function (success) {
            $rootScope.$broadcast('auth.login');
            $scope.showLogin = false;
            init();
        }, function (error) {
            $rootScope.$broadcast('auth.error');
        });
    };

    $scope.isUserComplete = function () {
        return !!$rootScope.currentUser ? $rootScope.currentUser.isComplete() : true;
    };

    $scope.finishEdits = function () {
        UserFactory.updateUser($rootScope.currentUser.tempEdits).then(function (user) {
            $rootScope.currentUser.finalizeEdits();
        }, function (error) {
            $rootScope.$broadcast('auth.error');
        });
    };


    init();
});