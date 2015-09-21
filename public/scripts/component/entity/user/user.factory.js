app.factory('UserFactory', function ($http, $apiUrl, $q, User) {
    var prefix = '/user';
    var deferred = $q.defer();
    function wrap(method) {
        method.then(function(data) {
            deferred.resolve(User.build(data.data));
        }, function(error) {
          deferred.reject(error);
        });
        return deferred.promise;
    }
    return {
        getUser: function () {
            return wrap($http.get($apiUrl + prefix));
        },
        updateUser: function (data) {
            return wrap($http.put($apiUrl + prefix, JSON.stringify(data)));
        },
        login: function (data) {
            return wrap($http.post($apiUrl + prefix + '/login', JSON.stringify(data)));
        },
        logout: function () {
            return wrap($http.get($apiUrl + prefix + '/logout'));
        }
    };
});