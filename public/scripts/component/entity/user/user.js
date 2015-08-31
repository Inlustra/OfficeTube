app.factory('User', function (Entity) {

    function User() {
    }

    User.prototype.isComplete = function () {
        return !this.needsFullName && !this.needsEmail() && !this.needsName();
    };

    User.prototype.needsFullName = function () {
        console.log(this.fullname+' '+!this.fullname);
        return !this.fullname;
    };

    User.prototype.needsName = function () {
        return !this.name;
    };

    User.prototype.needsEmail = function () {
        return !this.email;
    };

    return angular.extend(User, Entity);
});