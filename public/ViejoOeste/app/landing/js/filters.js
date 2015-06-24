'use strict';

/* ViejoOeste Filters */
angular.module('ViejoOeste.filters', []).
    filter('interpolate', ['version', function(version) {
        return function(text) {
            return String(text).replace(/\%VERSION\%/mg, version);
        }
    }]);
