/**
 * StringrayApp.js : angular js file that contains the code of the framework
 * by Crestanello Tommy
 */

var stringrayApp = angular.module('stingrayApp', ['ngRoute']);

stringrayApp.controller('HomeCtrl', function() {

}).controller('SubHomeCtrl', function( $location ) {
  console.log($location);
  $window.location.href = '/';
});

stringrayApp.controller('ErrorCtrl', function() {

});

stringrayApp.config(['$routeProvider', function($routeProvider){
 $routeProvider.when('/', {
   title: 'titolo',
   templateUrl: 'pages/index.php'
 }).when('/pallone',{
   title: 'titolo',
   templateUrl: 'pages/subHomePage.php',
   controller: 'SubHomeCtrl'
 }).otherwise({
   redirectTo: '/',
  });
}]);
