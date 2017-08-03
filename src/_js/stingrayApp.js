/**
 * StringrayApp.js : angular js file that contains the code of the framework
 * by Crestanello Tommy
 */

var stringrayApp = angular.module('stingrayApp', ['ngRoute']);

// LoginCtrl : Controller for login operation on the system
stringrayApp.controller('LoginCtrl', ['$scope', function( $scope ) { }]);

stringrayApp.controller('HomeCtrl', [ '$scope', function( $scope ) {
  $scope.homepromoboxs = [
    {id : "0" ,label : "Label and ready text 0", image: "/imgs/logoAndroid.png"},
    {id : "1" ,label : "Label and ready text 1", image: "/imgs/logoAndroid.png"},
    {id : "2" ,label : "Label and ready text 2", image: "/imgs/logoAndroid.png"},
    {id : "3" ,label : "Label and ready text 3", image: "/imgs/samsung_150x80.jpg"},
    {id : "4" ,label : "Label and ready text 4", image: "/imgs/samsung_150x80.jpg"},
    {id : "5" ,label : "Label and ready text 5", image: "/imgs/samsung_150x80.jpg"}];
}]);

// SubHomeCtrl : controller to manage all the subhome page except home page
stringrayApp.controller('SubHomeCtrl', ['$scope', function( $scope ) {
  $scope.subhomepromoboxs = {id : "0" ,label : "Label lateral box 0", image: "/imgs/logoAndroid.png"};
  $scope.paragraphTwoThird = {id: "0", content : "Content on the page at 2/3 completely text"};
  $scope.paragraphFullWidth = {id: "0", content : "Content on the page at full width completely text"};
}]);

// ErrorCtrl : controller for manage the error on the platform
stringrayApp.controller('ErrorCtrl', function() {});

// Routing configuration for the application
stringrayApp.config(['$routeProvider', function($routeProvider){
 $routeProvider.when('/', {
   title: 'titolo',
   templateUrl: 'pages/index.php',
   controller: 'HomeCtrl'
 }).when('/subhome',{
   title: 'titolo',
   templateUrl: 'pages/subHomePage.php',
   controller: 'SubHomeCtrl'
 }).otherwise({
   redirectTo: '/'
  });
}]);
