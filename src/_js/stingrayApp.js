/**
 * StringrayApp.js : angular js file that contains the code of the framework
 * by Crestanello Tommy
 */

var stringrayApp = angular.module('stingrayApp', ['ngRoute']);

stringrayApp.controller('HomeCtrl', function() {

 });

 stringrayApp.config(['$routeProvider', function($routeProvider){
   $routeProvider.when('/', {
     title: 'titolo',
     templateUrl: 'pages/index.php'
   }).when('/subHomePage.php',{
     title: 'titolo',
     templateUrl: 'pages/subHomePage.php'
   })
   .otherwise({
     redirectTo: '/'
   });
 }]);
