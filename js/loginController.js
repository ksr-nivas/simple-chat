(function() {
  var app = angular.module('myApp', []);
  
  
  app.controller('LoginController', function($scope, $http) {
    
    $scope.login = function(){
      var reqObject = {
          method: 'POST',
          url: 'http://localhost/chat/simple-chat/',
          headers: {'Content-Type': undefined},
          data: {'username': $scope.username, 'password': $scope.password}
      };
      $http(reqObject).then( function(response) {
          //Todo: take necessary action, redirect to chat app or show an error
          console.log( response ); 
       });

    };
    
  });
  
  
})();