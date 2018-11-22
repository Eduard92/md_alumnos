(function () {
    'use strict';
    
    angular.module('app')
  
    .controller('IndexCtrl',['$scope','$http','$uibModal','$filter','logger',IndexCtrl])

    
    

    function IndexCtrl($scope,$http,$uibModal,$filter,logger)
    {

       $scope.alumnos = alumnos;


    }

    

  
    

    


    

})();
