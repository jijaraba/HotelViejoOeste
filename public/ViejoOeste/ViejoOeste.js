'use strict';

angular.module('ViejoOeste', [
    'ui.router',
    'ngResource',
    'ngAnimate',
    'ViejoOeste.filters',
    'ViejoOeste.services',
    'ViejoOeste.factories',
    'ViejoOeste.directives',
    'ViejoOeste.controllers'
]);

angular.module('ViejoOeste').config(function($stateProvider,$urlRouterProvider) {
    $stateProvider
        .state('cabin', {
            url:'/',
            views: {
                "viewCabin": {
                    templateUrl: 'ViejoOeste/app/landing/views/dashboard.html?id=' + Math.random(),
                    controller: 'DashboardController'
                }
            },
            resolve: {
                delay: function($q, $timeout) {
                    var delay = $q.defer();
                    $timeout(delay.resolve, 500);
                    return delay.promise;
                }
            }
        })
        .state('detail2323232', {
            url:'/cabin1/:slug',
            views: {
                "viewCabin": {
                    templateUrl: 'ViejoOeste/app/landing/views/cabin.html',
                    controller: 'CabinController'
                }
            }
        })
        .state('cabin.detail', {
            url:'cabin/:slug',
            views: {
                "viewCabin.Detail": {
                    templateUrl: 'ViejoOeste/app/landing/views/cabin.html?id=' + Math.random(),
                    controller: 'CabinController'
                }
            }
        });
    $urlRouterProvider.otherwise('/');
});