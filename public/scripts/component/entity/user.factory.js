app.factory('User', function (UserService, $localStorage) {

    var email;
    var fullName;
    var password;
    var name;

    /**
     * Constructor, with class name
     */
    function User(email, fullName, name, avatar) {
        // Public properties, assigned to the instance ('this')
        this.email = email;
        this.fullName = fullName;
        this.name = name;
        this.avatar = avatar;
    }

    /**
     * Public method, assigned to prototype
     */
    User.prototype.isFullyRegistered = function () {
        if (!this.email) return false;
        if (!this.fullName) return false;
        if (!this.name) return false;
        if (!this.avatar) return false;
        return true;
    };

    /**
     * Private property
     */
    var possibleRoles = ['admin', 'editor', 'guest'];

    /**
     * Private function
     */
    function checkRole(role) {
        return possibleRoles.indexOf(role) !== -1;
    }

    User.build = function (data) {
        return new User(data.email, data.fullName, data.name, data.avatar); // another model
    };

    /**
     * Return the constructor function
     */
    return User;
});