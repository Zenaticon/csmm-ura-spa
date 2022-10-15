<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clubul Studențesc de Management-Marketing</title>
    <link rel="stylesheet" href="assets/scss/style.css" />
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    
  </head>
  <body ng-app="myApp" ng-controller="ro">
    <div class="container-fluid bg-dark text-white fixed-top p-2">
      <div class="container">
        <p class="m-0">Email: clubmmk18@gmail.com</p>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark bg-opacity-95 fixed-top shadow" style="top: 40px;">
      <div class="container">
        <a class="navbar-brand p-0" href="#/!">
          <img src="assets/img/cmm-500.jpg" alt="CSMM-URA" width="40" height="40">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- FIXME Find out why is home page reloading almost every time the content. -->
            <!-- FIXME Changing page from home page to any other page resets the view to top. -->
            <li class="nav-item">
              <a class="nav-link" ng-class="{active:isActive('/')}" aria-current="page" href="#/!">Acasă</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ng-class="{active:isActive('/about-us')}" href="#!about-us">Despre Noi</a>
            </li>
            <li class="nav-item" hidden>
              <a class="nav-link" ng-class="{active:isActive('/events')}" href="#!events">Evenimente</a>
            </li>
            <li class="nav-item" hidden>
              <a class="nav-link" ng-class="{active:isActive('/blog')}" href="#!blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ng-class="{active:isActive('/student-links')}" href="#!student-links">Link-uri Studenți</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" ng-class="{active:isActive('/contact')}" href="#!contact">Contact</a>
            </li>
          </ul>
          <!-- <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-dark" type="submit">
              Search
            </button>
          </form> -->
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://img.icons8.com/color/24/000000/romania-circular.png"/> {{lang}}
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#!{{href}}"><img src="https://img.icons8.com/color/24/000000/romania-circular.png"/> {{langtext.ro}}</a></li>
              <li><a class="dropdown-item" href="#!en/{{href}}"><img src="https://img.icons8.com/color/24/000000/usa-circular.png"/> {{langtext.en}}</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div ng-view></div>

    <div class="bg-secondary">
      <div class="container-fluid footer p-3 bg-dark-second bg-dark-opacity-50">
        <div class="container py-3">
          <div class="row" style="row-gap: 1rem;">
            <div class="col-lg-4 col-md-6 col-sm-8 col-12">
              <img class="d-inline-block align-top" src="assets/img/cmm-500.jpg" alt="" width="50px" height="50px">
              <h5 class="d-inline-block w-75 mx-2">Clubul Studențesc de Management-Marketing</h5>
              <p class="text-justify mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt consequatur doloribus cumque inventore explicabo itaque quae, fuga numquam officia laboriosam vero temporibus velit dolor eos magnam! Facilis ad et repudiandae.</p>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-decoration-none link-white">
              <h5>Link-uri utile</h5>
              <div class="d-grid gap-2">
                <a href="#/!">Acasă</a>
                <a href="#!about-us">Despre Noi</a>
                <a href="#!events" hidden>Evenimente</a>
                <a href="#!blog" hidden>Blog</a>
                <a href="#!student-links">Link-uri Studenți</a>
                <a href="#!contact">Contact</a>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-decoration-none link-white">
              <h5>Link-uri Studenți</h5>
              <div class="d-grid gap-2">
                <a href="https://paginamea.rau.ro" target="_blank">Pagina Mea</a>
                <a href="http://www.rau.ro" target="_blank">Website Universitate</a>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-decoration-none link-white">
              <h5>Place Holder</h5>
              <div class="d-grid gap-2">
                <a href="">Place Holder</a>
                <a href="">Place Holder</a>
                <a href="">Place Holder</a>
                <a href="">Place Holder</a>
                <a href="">Place Holder</a>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-decoration-none link-white">
              <h5>Legal</h5>
              <div class="d-grid gap-2">
                <a href="http://privacy.rau.ro">GDPR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid footer text-center p-3 bg-dark-second bg-dark-opacity-70">
        <p class="m-0">Copyright &copy; 2022 www.csmm-ura.org</p>
      </div>
    </div>
    <!-- SCRIPTS -->
    <script>
      var app = angular.module("myApp", ["ngRoute"]);
      app.config(function($routeProvider) {
          $routeProvider
          .when("/", {
              templateUrl : "main.htm",
              controller : "ro"
              // controller: "widgetsController"
              // activetab: 'home'
          })
          .when("/about-us", {
              templateUrl : "about-us.htm",
              controller : "ro"
          })
          .when("/student-links", {
              templateUrl : "student-links.htm",
              controller : "ro"
          })
          .when("/contact", {
              templateUrl : "contact.htm",
              controller : "ro"
          })
          .when("/recruitment", {
              templateUrl : "recruitment.htm",
              controller : "ro"
          })
          .otherwise({
              templateUrl : "404.htm",
              controller : "ro"
          });
      });
      app.controller("ro", function ($scope, $location) {
        $scope.lang = "Română";
        $scope.langtext = {
          "ro" : "Română",
          "en" : "Engleză"
        };

        $scope.isActive = function(route) {
            return route === $location.path();
        }

        $scope.href = $location.path().substring(1);
      });
      app.controller("en", function ($scope) {
        $scope.lang = "English";
        $scope.langtext = {
          "ro" : "Romanian",
          "en" : "English"
        };
      });
      // app.controller('widgetsController', function($scope, $location) {
      //     $scope.isActive = function(route) {
      //         return route === $location.path();
      //     }
      // });
      // angular.module('link', []).
      // directive('activeLink', ['$location', function(location) {
      //     return {
      //         restrict: 'A',
      //         link: function(scope, element, attrs, controller) {
      //             var clazz = attrs.activeLink;
      //             var path = attrs.href;
      //             path = path.substring(1); //hack because path does bot return including hashbang
      //             scope.location = location;
      //             scope.$watch('location.path()', function(newPath) {
      //                 if (path === newPath) {
      //                     element.addClass(clazz);
      //                 } else {
      //                     element.removeClass(clazz);
      //                 }
      //             });
      //         }

      //     };

      // }]);
      // function widgetsController($scope, $route) {
      //     $scope.$route = $route;
      //     $scope.activeTab = $route.current.activetab;
      // }
    </script>
    <script src="assets/js/script.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </body>
</html>
