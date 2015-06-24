'use strict';

/* ViejoOeste Directives */
angular.module('ViejoOeste.directives', []).
    directive('appVersion', ['version', function(version) {
        return function(scope, elm, attrs) {
            elm.text(version);
        };
    }])
    .directive('viejoOesteCapacity', ['$log', function($log){
        return {
            restrict: 'AE',
            controller: function($scope){
                $scope.capacity = "Capacidad"
            },
            templateUrl: 'ViejoOeste/app/landing/views/partials/capacity.html',
            link: function(scope, element, attrs) {
                //Add
                scope.addCapacity = function(){
                    if (isNaN(parseInt(scope.capacity))) {
                        scope.capacity = 1;
                    }
                    if (scope.capacity <= 11) {
                        scope.capacity++;
                    }
                }
                //Minus
                scope.minusCapacity = function(){
                    if (isNaN(parseInt(scope.capacity))) {
                        scope.capacity = 2;
                    }
                    if (scope.capacity > 2) {
                        scope.capacity--;
                    }
                }
            }
        }
    }])
    .directive('viejoOesteRate', ['$log', function($log){
        return {
            restrict: 'AE',
            controller: function($scope){
                $scope.rate = "Precio"
            },
            templateUrl: 'ViejoOeste/app/landing/views/partials/rate.html',
            link: function(scope,element,attrs,ngModelCtrl) {
                //Add
                scope.addRate = function(){
                    if (isNaN(parseInt(scope.rate))) {
                        scope.rate = 100000;
                    }
                    if (scope.rate <= 1100000) {
                        scope.rate = scope.rate + 100000;
                    }
                }
                //Minus
                scope.minusRate = function(){
                    if (isNaN(parseInt(scope.rate))) {
                        scope.rate = 200000;
                    }
                    if (scope.rate > 200000) {
                        scope.rate = scope.rate - 200000;
                    }
                }

            }
        }
    }])
    .directive('blurCurrency', ['$log','$filter', function($log,$filter){
        return {
            require: '^ngModel',
            scope: true,
            restrict: 'AE',
            link: function(scope,element,attrs,ngModelCtrl) {

                function formatter(value) {
                    value = parseFloat(value.toString().replace(/[^0-9._-]/g, ''));
                    var formattedValue = $filter('currency')(value);
                    element.val(formattedValue);
                    return formattedValue;
                }

                ngModelCtrl.$formatters.push(formatter);

                element.bind('focus', function() {
                    element.val('');
                });

                element.bind('blur', function() {
                    formatter(element.val());
                });

            }
        }
    }]);
