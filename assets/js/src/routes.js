angular.module('sd')

    .config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider){
        $locationProvider.html5Mode({
            enabled: true,
            requireBase: false
        });
        $routeProvider
        .when('/', {
            templateUrl: '/partials/home'
        })
        .when('/auth/runkeeper', {
            redirectTo: function(){
                // reload entire page
                window.location.reload();
            }
        })
        .when('/logout', {
            redirectTo: function(){
                // reload entire page
                window.location.reload();
            }
        })
        .when('/login', {
            templateUrl: '/partials/login'
        })
        .when('/account', {
            templateUrl: '/partials/account'
        })
        .otherwise({
            templateUrl: '/partials/404'
        });
    }]);
