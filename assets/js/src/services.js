angular.module('sd')

    .factory('', ['$http', function($http) {
        return {
            exampleMethod: function() {
                return true;
            }
        }
    }]);
