app.factory('User', function (Entity) {

    function User() {
    }

    User.prototype.name = "";
    User.prototype.fullname = "";
    User.prototype.email = "";
    User.prototype.dob = "";
    User.prototype.avatar = "";

    User.prototype.edit = {};

    User.prototype.finalizeEdits = function () {
        angular.merge(this, this.edit);
    };

    User.prototype.tempEdits = function () {
        return angular.extend({}, this, this.edit);
    };

    User.prototype.isComplete = function () {
        return this.hasFullName && this.hasEmail() && this.hasName() && this.hasDoB() && this.hasPassword;
    };

    User.prototype.hasFullName = function () {
        return !!this.fullname;
    };

    User.prototype.hasName = function () {
        return !!this.name;
    };

    User.prototype.hasEmail = function () {
        return !!this.email;
    };

    User.prototype.hasDoB = function () {
        return !!this.dob;
    };


    return angular.extend(User, Entity);
});