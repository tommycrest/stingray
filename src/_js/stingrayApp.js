/**
 * StringrayApp.js : angular js file that contains the code of the framework
 * by Crestanello Tommy
 */

var stringrayApp = angular.module('stingrayApp', ['ngRoute']);

stringrayApp.factory('translations', [ '$http', function($http){
  var LOCAL_DB = 'http://localhost:3000';
  var obj = {};
  obj.getItalianTranslation = function() {
    return $http.get(LOCAL_DB+'/it');
  }
  return obj;
}]);

stringrayApp.controller('HomeCtrl', ['translations', '$scope', function( translations, $scope ) {

   $scope.translatedword = {};

    translations.getItalianTranslation().then(function(translated){
        console.log(translated.data);
        $scope.translatedword = translated.data;
        console.log($scope.translatedword);
    });

    getdata = function() {
      return $scope.translatedword;
    }

    var obj = {name: 'misko', gender: 'male'};
    var log = [];
    angular.forEach(obj, function(value, key) {
      console.log(key + ': ' + value);
    });
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
