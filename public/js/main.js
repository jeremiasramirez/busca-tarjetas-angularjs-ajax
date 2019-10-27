(()=>{

/*

 *** init module angularJs ***

*/
  let app = angular.module("ajaxApp", []);

  app.controller("dataExtern", ['$scope','$http', function($scope, $http){

      $scope.datos = [];
      $scope.sh = 0;
      $scope.btn = 0;
      $scope.btn2 = 1;

      /*

      ocultando y mostrando botones al dibujarse datos.


      */


      $scope.mostrar = ()=>{

        $scope.sh= 0;
        $scope.btn= 0;
        $scope.btn2= 1;

      }


      $scope.ocultar = ()=>{

        $scope.sh =1;
        $scope.btn2 = 0;
        $scope.btn = 1;

      }



      /*
       http request


      */

      $http({

        method: 'GET',
        url: 'public/datajson/languages.json'

      }).then(function(resp){
          $scope.datos = resp.data;
      })





  }])


})()
