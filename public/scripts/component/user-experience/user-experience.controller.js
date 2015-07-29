app.controller('UserExperienceController', function (AuthService, $rootScope, $scope) {
    $rootScope.$on('auth.login', function (event, data) {
        $scope.user = data;
    });
});