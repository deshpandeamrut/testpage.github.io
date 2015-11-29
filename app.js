var app = angular.module('myAngularApp',['ngRoute']);
app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/item1', {
        templateUrl: 'item1.html',
        controller: 'item1Controller'
      }).
      when('/item2', {
        templateUrl: 'item2.html',
        controller: 'item2Controller'
      }).
      otherwise({
        redirectTo: '/item1'
      });
  }]);
  
  app.controller('mainController',function(){
//    alert("main controller");
  });
  
  app.controller('item1Controller',function(){
    alert("item1 controller");
  });
  app.controller('item2Controller',function(){
//    alert("item2 controller");
  });