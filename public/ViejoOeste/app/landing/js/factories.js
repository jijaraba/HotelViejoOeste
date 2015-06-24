'use strict';

/* ViejoOeste Factories */
angular.module('ViejoOeste.factories', [])
    //Religions
    .factory('Cabin', ['$resource',function($resource){
        return $resource('/api/v1/cabins/:cabinId/:action/:token', { cabinId: '@id', action: '@action', token: '@token' }, {
            all: {
                method: 'GET',
                isArray: true
            },
            getBySlug: {
                method: 'GET',
                params: { action: 'getbyslug', token: 'x@1_7-' }
            }
        });
    }]);