app.factory('UserFactory', function ($http, $apiUrl, $q, User, Build) {
    var prefix = '/user';

    return {
        getUser: function () {
            return Build(User, $http.get($apiUrl + prefix));
        },
        updateUser: function (data) {
            return Build(User, $http.put($apiUrl + prefix, JSON.stringify(data)));
        },
        login: function (data) {
            return Build(User, $http.post($apiUrl + prefix + '/login', JSON.stringify(data)));
        },
        logout: function () {
            return Build(User, $http.get($apiUrl + prefix + '/logout'));
        }
    };
});