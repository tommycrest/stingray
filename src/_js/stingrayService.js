/**
 * stingrayService : services definition of the platform for recover the data from the database
 */
stringrayApp.service('translations', [ '$http', function($http){
  var obj = {};
  var LOCAL_DB = 'http://localhost:3000';
  var obj = {};
  var data = {};
  obj.getItalianTranslation = function() {
     data = $http.get(LOCAL_DB+'/it');
     return data;
  }
  return obj;

}]);
