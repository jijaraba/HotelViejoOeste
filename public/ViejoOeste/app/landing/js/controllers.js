'use strict';

/* ViejoOeste Controllers */
angular.module('ViejoOeste.controllers', [])
    .controller('DashboardController',['$scope','$log','Cabin',function($scope,$log,Cabin){

        $scope.message = "Cabañas";
        $scope.capacity = 0;
        $scope.rate = 0;
        Cabin.query({}).$promise.then(
            function(cabins){
                $scope.cabins = cabins;
            },
            function(error){
                $log.error(error);
            }
        );


    }])
    .controller('CabinController',['$scope','$log','$stateParams','Cabin',function($scope,$log,$stateParams,Cabin){

        Cabin.getBySlug({slug: $stateParams.slug}).$promise.then(
            function(cabin){
                $scope.cabin = cabin;
                $scope.message = cabin.name;
            },
            function(error){
                $log.error(error);
            }
        );

    }]);