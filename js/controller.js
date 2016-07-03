angular.module('controller', [])

.controller('BlogCtrl', ['$scope', '$http', '$log', function($scope, $http, $log) {


	$http.get('./js/popData.php')
		.success(function(data) {
			$scope.blogs = data;
		})
		.error(function(err) {
			$log.error(err);
		})

	$scope.pushData = function($params) {
        
		$http.post('./js/userNew.php',{'email':$params.email, 'login':$params.login, 'pass':$params.pass})

           
           
        
      $http.get('./js/userLogin.php',{'email':$params.email, 'login':$params.login, 'pass':$params.pass})
            
         //$scope.blogs = data;
            
         $scope.frm.login = "";
            $scope.frm.email = "";
            $scope.frm.pass = "";
            
         $scope.show = true;
        
        
        
	}

	$scope.removeData = function($params) {
		var cnfrm = confirm("Are you sure to delete?");
		if(cnfrm) {
			$http.post('./js/removeData.php', {'id':$params})
			.success(function(data) {
				$scope.blogs = data;
			})
			.error(function(err) {
				$log.error(err);
			})
		} else {
			// 
		}
		
	}
 
    
            

}])