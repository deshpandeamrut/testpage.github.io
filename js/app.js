var app = angular.module('myAngularApp', ['ngRoute', 'ngAnimate', 'ngAria', 'ngMaterial']);
app.config(['$routeProvider',
    function ($routeProvider) {
        $routeProvider.
                when('/default', {
                    templateUrl: 'default.html',
                    controller: 'defaultController'
                }).
                when('/item1', {
                    templateUrl: 'item1.html',
                    controller: 'item1Controller'
                }).
                when('/item2', {
                    templateUrl: 'item2.html',
                    controller: 'item2Controller'
                }).
                when('/item3', {
                    templateUrl: 'item3.html',
                    controller: 'item3Controller'
                }).
                when('/item4', {
                    templateUrl: 'item4.html',
                    controller: 'item4Controller'
                }).
                when('/feed', {
                    templateUrl: 'feed.html',
                    controller: 'feedController'
                }).
                when('/post/:id?', {
                    templateUrl: 'post.html',
                    controller: 'postController'
                }).
                when('/todo', {
                    templateUrl: 'todo.html',
                    controller: 'todoController'
                }).
                otherwise({
                    redirectTo: '/default'
                });
    }]);
app.config(function($mdThemingProvider) {
  $mdThemingProvider.theme('default')
    .primaryPalette('blue')
    .accentPalette('red');
    
});

