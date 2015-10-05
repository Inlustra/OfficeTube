app.factory('Entity', function () {

    function Entity() {

    }

    Entity.build = function (data) {
        var entity = new this();
        for (var key in data) {
            //copy all the fields
            entity[key] = data[key];
        }
        return entity;
    };

    return Entity;
});
app.service('Build', function($q) {
    var deferred = $q.defer();
    return function (entity, method) {
        method.then(function(data) {
            deferred.resolve(entity.build(data.data));
        }, function(error) {
            deferred.reject(error);
        });
        return deferred.promise;
    }
});
