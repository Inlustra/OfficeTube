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