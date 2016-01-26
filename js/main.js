//Soundcloud
// function playSomeSound(genre){
//   SC.get('/tracks', {
//     genres: genre
//   }, function(tracks){
//     var random = Math.floor(Math.random()*49);
//   SC.oEmbed(tracks[random].uri, {auto_play:true}, document.getElementById('player'));
//   });
// }

// window.onload = function(){
//   SC.initialize({
//     client_id: '8252b473b6d9a433882f050f2fa37842'
//   });

//   var menuLinks = document.getElementsByClassName('genre');
//   for(var i=0; i<menuLinks.length; i++) {
//     var menuLink = menuLinks[i];
//     menuLink.onclick = function(e) {
//       e.preventDefault();
//       playSomeSound(menuLink.innerHTML);
//     };
//   };
// };
$(document).ready(function(){
  $(".brand").addClass("animated zoomInDown");
  $(".name").addClass("animated slideInLeft");
  $(".number").addClass("animated slideInRight");
  $('.home').mouseenter(function(){
    $('.home').html(" { Home } ");
  })
  $('.home').mouseleave(function(){
    $('.home').html("  Home  ");
  })
  $('.about').mouseenter(function(){
    $('.about').html(" { About }");
  })
  $('.about').mouseleave(function(){
    $('.about').html("  About  ");
  })
  $('.projects').mouseenter(function(){
    $('.projects').html("{ projects }");
  })
  $('.projects').mouseleave(function(){
    $('.projects').html("  Projects  ");
  })
  $('.blog').mouseenter(function(){
    $('.blog').html(" { blog } ");
  })
  $('.blog').mouseleave(function(){
    $('.blog').html("  Blog  ");
  })
  $('.contact').mouseenter(function(){
    $('.contact').html(" { contact } ");
  })
  $('.contact').mouseleave(function(){
    $('.contact').html("  Contact  ");
  })
});


var app = angular.module('myApp',['ngRoute']);

app.config(function($routeProvider) {
  $routeProvider
    .when('/', {
      templateUrl:'inc/home.php',
      controller: 'HomeController'
    })
    .when('/about', {
      templateUrl:'inc/about.php',
      controller: 'AboutController'
    })
    .when('/blog', {
      templateUrl:'inc/blog.php',
      controller: 'BlogController'
    })
    .when('/blog2', {
      templateUrl:'inc/blog2.php',
      controller: 'Blog2Controller'
    })
    .when('/blog3', {
      templateUrl:'inc/blog3.php',
      controller: 'Blog2Controller'
    })
    .when('/contact', {
      templateUrl:'inc/contact.php',
      controller: 'ContactController'
    })
    .when('/projects', {
      templateUrl:'inc/projects.php',
      controller: 'ProjectsController'
    })
    .otherwise({
      redirectTo: '/'
    })
});

angular.module('ngToggle', [])
    .controller('AppCtrl',['$scope', function($scope){
        $scope.custom = true;
        $scope.toggleCustom = function() {
            $scope.custom = $scope.custom === false ? true: false;
        };
}]);

app.controller('HomeController', function($scope){
  $scope.pageClass = 'home';
});

app.controller('AboutController', function($scope){
  $scope.pageClass = 'about';
});

app.controller('BlogController', function($scope){
  $scope.pageClass = 'blog';
});

app.controller('Blog2Controller', function($scope){
  $scope.pageClass = 'blog2';
});

app.controller('Blog3Controller', function($scope){
  $scope.pageClass = 'blog3';
});

app.controller('ContactController', function($scope){
  $scope.pageClass = 'contact';
});

app.controller('ProjectsController', function($scope){
  $scope.pageClass = 'projects';
});
