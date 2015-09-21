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
        return !this.needsFullName && !this.needsEmail() && !this.needsName() && this.needsDoB();
    };

    User.prototype.needsFullName = function () {
        console.log(this.fullname + ' ' + !this.fullname);
        return !this.fullname;
    };

    User.prototype.needsName = function () {
        return !this.name;
    };

    User.prototype.needsEmail = function () {
        return !this.email;
    };

    User.prototype.needsDoB = function () {
        return !this.dob;
    };


    return angular.extend(User, Entity);
});