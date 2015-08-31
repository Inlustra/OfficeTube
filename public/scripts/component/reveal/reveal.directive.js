angular.module("reveal", []).directive('reveal', function ($timeout) {
    var form = function ($scope, element, attributes) {

        var expression = attributes.when;
        // I am the optional slide duration.
        var duration = ( attributes.slideShowDuration || "fast" );
        // I check to see the default display of the
        // element based on the link-time value of the
        // model we are watching.
        if (!$scope.$eval(expression)) {
            element.hide();
        }
        // I watch the expression in $scope context to
        // see when it changes - and adjust the visibility
        // of the element accordingly.
        $scope.$watch(
            expression,
            function (newValue, oldValue) {
                if (newValue === oldValue) {
                    return;
                }
                if (newValue) {
                    element
                        .stop(true, true)
                        .slideDown(duration);
                } else {
                    element
                        .stop(true, true)
                        .slideUp(duration);
                }
            });
    };
    return {
        restrict: 'E',
        link: form
    }
});