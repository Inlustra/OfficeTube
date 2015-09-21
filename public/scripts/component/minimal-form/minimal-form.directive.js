angular.module("minimalForm", []).directive('minimalForm', function ($parse, $timeout) {
    var form = function (scope, element, attrs) {
        var expressionHandler;
        if (attrs.onEnd)
            expressionHandler = $parse(attrs.onEnd);
        scope.$watch(
            function () {
                return element[0].querySelectorAll('.minimal-form-input').length;
            },
            function (newValue, oldValue) {
                initFields();
                setProgress();
                setNumber();
            }
        );

        var progress = angular.element(element[0].querySelector('.minimal-form-progress'));
        var currentNumber = 0;
        var inputList = element[0].querySelectorAll('.minimal-form-input');
        var nextButton = element[0].querySelector('button');
        var questions = angular.element(element[0].querySelector('.minimal-form-questions'));
        var max = inputList.length;

        function initFields() {

            progress = angular.element(element[0].querySelector('.minimal-form-progress'));
            currentNumber = 0;
            inputList = element[0].querySelectorAll('.minimal-form-input');
            nextButton = element[0].querySelector('button');
            questions = angular.element(element[0].querySelector('.minimal-form-questions'));
            max = inputList.length;
            for (var i = 0; i < inputList.length; i++) {
                if (i == currentNumber) {
                    inputList[i].classList.remove('minimal-form-hidden');
                    inputList[i].classList.add('minimal-form-current');
                    continue;
                }
                inputList[i].classList.remove('minimal-form-current');
                inputList[i].classList.add('minimal-form-hidden');
            }
        }

        function setFields() {
            var current = element[0].querySelector('.minimal-form-current');
            current.classList.remove('minimal-form-current');
            current.classList.add('minimal-form-hiding');
            $timeout(function () {
                current.classList.remove('minimal-form-hiding');
                current.classList.add('minimal-form-hidden');
                inputList[currentNumber].classList.remove('minimal-form-hidden');
                inputList[currentNumber].classList.add('minimal-form-current');
            }, 200);
        }

        function end() {
            var current = element[0].querySelector('.minimal-form > form');
            if (current)
                current.classList.add('minimal-form-hidden');
            current = element[0].querySelector('.minimal-form-progress-container');
            if (current)
                current.classList.add('minimal-form-hidden');
            current = element[0].querySelector('.minimal-form-questions');
            if (current)
                current.classList.add('minimal-form-hidden');
            current = element[0].querySelector('.minimal-form-end');
            if (current) {
                current.classList.remove('minimal-form-hidden');
                current.classList.add('minimal-form-current');
            }
            nextButton.classList.add('minimal-form-hidden');
            if (expressionHandler)
                expressionHandler(scope);
        }

        function setProgress() {
            var percent = ((currentNumber + 1) / max) * 100;
            progress.css({'width': percent + '%'});
        }

        function setNumber() {
            var textprogress = (currentNumber + 1) + ' / ' + max;
            questions.text(textprogress);
        }

        var next = function () {
            var current = element[0].querySelector('.minimal-form-current > input');
            if (!current.checkValidity()) {
                return;
            }
            if (max <= ++currentNumber) {
                end();
                return;
            }
            setFields();
            setProgress();
            setNumber();
        };

        var previous = function () {
            currentNumber--;
            setFields();
            setProgress();
            setNumber();
        };

        angular.element(nextButton).bind('click', next);
        initFields();
        setProgress();
        setNumber();
    };
    return {
        restrict: 'EC',
        link: form
    }
});