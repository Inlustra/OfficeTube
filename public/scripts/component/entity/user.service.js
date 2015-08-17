app.service('UserService', function ($http, $apiUrl) {
    var prefix = '/user';
    return {
        getUser: function () {
            return $http.get($apiUrl + prefix);
        },
        login: function (data) {
            return $http.post($apiUrl + prefix + '/login', JSON.stringify(data));
        },
        logout: function () {
            return $http.get($apiUrl + prefix + '/logout');
        }
    };
});