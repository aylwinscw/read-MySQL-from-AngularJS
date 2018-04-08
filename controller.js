var app = angular.module("myApp", []);

app.controller("myCtrl", function($scope, $http){
    $scope.hello = "Success !";
    
    $http.get("function.php").then(function(response){
                                   
       $scope.menus = response.data.records;
    });

    
    
});