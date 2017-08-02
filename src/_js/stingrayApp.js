/**
 * StringrayApp.js : angular js file that contains the code of the framework
 * by Crestanello Tommy
 */

var stringrayApp = angular.module('stingrayApp', ['ngRoute']);

// This factory must be reconsidered because actually doesn't work correctly
// TODO: linking to a databse nosql ( json ) that permit to recover all data
// and put them on the UI.
stringrayApp.factory('translations', [ '$http', function($http){
  var obj = {};
  return obj;
  /*var LOCAL_DB = 'http://localhost:3000';
  var obj = {};
  var data = {};
  obj.getItalianTranslation = function() {
     data = $http.get(LOCAL_DB+'/it');
     return data;
  }
  return obj;*/
}]);

stringrayApp.controller('HomeCtrl', ['translations', '$scope', function( translations, $scope ) {
  $scope.homepromoboxs = [
    {id : "0" ,label : "Label and ready text 0", image: "/imgs/logoAndroid.png"},
    {id : "1" ,label : "Label and ready text 1", image: "/imgs/logoAndroid.png"},
    {id : "2" ,label : "Label and ready text 2", image: "/imgs/logoAndroid.png"},
    {id : "3" ,label : "Label and ready text 3", image: "/imgs/samsung_150x80.jpg"},
    {id : "4" ,label : "Label and ready text 4", image: "/imgs/samsung_150x80.jpg"},
    {id : "5" ,label : "Label and ready text 5", image: "/imgs/samsung_150x80.jpg"}];
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
