angular.module('app',[])

.controller('Main',['$http','$scope', function($http,$scope){
	console.log('Main File loaded.');
	$scope.sendPost = function(postID, requestUrl){
		$http({
			method: 'POST',
			url: requestUrl
		}).then(function successCallback(response){
			console.log("success");
		})

	}
}])




;

