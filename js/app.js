angular.module('app',['ngRoute'])
.config(function($routeProvider, $locationProvider){
	$locationProvider.html5Mode(true);

	$routeProvider.when('/institution',{
		templateUrl: 'wordpress/wp-content/themes/radiance-lite/institution.php',
		controller: 'Main'
	});
})

.controller('Main', function(){
	console.log('Main File loaded.');
})