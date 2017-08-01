/**
 * StringrayApp.js : angular js file that contains the code of the framework
 * by Crestanello Tommy
 */

var stringrayApp = angular.module('stingrayApp', ['ngRoute']);

stringrayApp.factory('translations', [ '$http', function($http){
  var LOCAL_DB = 'http://localhost:3000';
  var obj = {};
  var data = {};
  obj.getItalianTranslation = function() {
     data = $http.get(LOCAL_DB+'/it');
     return data;
  }
  return obj;
}]);

stringrayApp.controller('HomeCtrl', ['translations', '$scope', function( translations, $scope ) {

   $scope.translatedword = {};

}]);

stringrayApp.controller('SubHomeCtrl', function( $location ) {

});

stringrayApp.controller('ErrorCtrl', function() {

});

stringrayApp.config(['$routeProvider', function($routeProvider){
 $routeProvider.when('/', {
   title: 'titolo',
   templateUrl: 'pages/index.php',
   controller: 'HomeCtrl'
 }).when('/pallone',{
   title: 'titolo',
   templateUrl: 'pages/subHomePage.php',
   controller: 'SubHomeCtrl'
 }).otherwise({
   redirectTo: '/',
  });
}]);
