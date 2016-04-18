var wpApp = new angular.module('wpAngularTheme', ['ui.router', 'ngResource']);

wpApp.factory('Posts', function($resource) {
	return $resource(appInfo.api_url + 'posts/:ID', {
		ID: '@id'
	})
});

wpApp.factory('Pages', function($resource) {
	return $resource(appInfo.api_url + 'pages/?slug=about')
});

wpApp.controller('FashionCtrl', ['$scope', 'Posts', function($scope, Posts) {
	console.log('works');
	// $scope.page_title = 'Blog Listing';
 //    Posts.query(function(res) {
 //    	$scope.posts = res;
 //    });
	console.log('FashionCtrl');
    Posts.query(function(res) {
    	$scope.posts = res;
    	console.log($scope.posts);
    });
}])

wpApp.controller('OtherCtrl', ['$scope', 'Posts', function($scope, Posts) {
	console.log('works');
	console.log('OtherCtrl');
    Posts.query(function(res) {
    	$scope.posts = res;
    	console.log($scope.posts);
    });

}])

wpApp.controller('ProjectCtrl', ['$scope', '$stateParams', 'Posts', function($scope, $stateParams, Posts) {
	console.log($stateParams);
	Posts.get({ID: $stateParams.id}, function(res) {
		$scope.post = res;
		console.log(res);
	})

}])

wpApp.controller('AboutCtrl', ['$scope', '$stateParams', 'Pages', function($scope, $stateParams, Pages) {
	 console.log('I am working');
	 Pages.query(function(res) {
    	$scope.page = res[0];
    	console.log($scope.page);
    });
}])

wpApp.config(function($stateProvider, $urlRouterProvider) {
	$urlRouterProvider.otherwise('/');
	$stateProvider
	       .state('fashion', {
	       	   url: '/',
	       	   controller: 'FashionCtrl',
	       	   templateUrl: appInfo.template_directory + 'templates/fashion.html'
	       })
	       	.state('about', {
	        	url: '/about',
	        	controller: 'AboutCtrl',
	        	templateUrl: appInfo.template_directory + 'templates/about.html'
	        })
	       .state('other-projects', {
	       	   url: '/other-projects',
	       	   controller: 'OtherCtrl',
	       	   templateUrl: appInfo.template_directory + 'templates/other.html'
	       })
	       .state('project', {
	        	url: '/:id',
	        	controller: 'ProjectCtrl',
	        	templateUrl: appInfo.template_directory + 'templates/project.html'
	        })
})

wpApp.filter('to_trusted', ['$sce', function($sce) {
	return function(text) {
		return $sce.trustAsHtml(text);
	}
}])