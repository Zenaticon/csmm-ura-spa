<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Cariera în CMM este o călătorie de 4 semestre care va da șansa membrilor să își dezvolte viziunea, abilitățile de lider, vocea și încrederea în aptitudinile personale. În cadrul programelor noastre vor învăța să coordoneze eficient echipe, cum să se facă văzuți, cum să se facă auziți, și cum să își organizeze eficient viața personală." />
  <meta name="author" content="" />
  <meta name="keywords" content="csmm, csmm-ura, cmm, cmm-ura">
  <!--  Essential META Tags -->
  <meta property="og:title" content="Clubul de Management-Marketing Recrutează">
  <meta property="og:type" content="article" />
  <meta property="og:image" content="assets/img/headers/header-1.jpeg">
  <meta property="og:url" content="https://csmm-ura.herokuapp.com/#!/recruitment">
  <meta name="twitter:card" content="summary_large_image">
  <title>Clubul de Management-Marketing Recrutează</title>
  <!-- Favicon-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="assets/scss/style.css" />
  <!-- Angular JS - route -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
</head>

<body ng-app="myApp" ng-controller="myCtrl">
  <div class="container-fluid bg-dark text-white fixed-top p-2">
    <div class="container">
      <p class="m-0">Email: <a href="mailto:clubmmk18@gmail.com" class="text-white">clubmmk18@gmail.com</a></p>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg bg-secondary navbar-dark bg-opacity-95 fixed-top shadow" style="top: 40px">
    <div class="container">
      <a class="navbar-brand p-0" href="#/!">
        <img src="assets/img/cmm-500.jpg" alt="CSMM-URA" width="40" height="40" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- FIXME Find out why is home page reloading almost every time the content. -->
          <!-- FIXME Changing page from home page to any other page resets the view to top. -->
          <li class="nav-item">
            <a class="nav-link" ng-class="{ active: isActive('/') }" aria-current="page" href="#/!">Acasă</a>
          </li>
          <li class="nav-item" hidden>
            <a class="nav-link" ng-class="{ active: isActive('/about-us') }" href="#!about-us">Despre Noi</a>
          </li>
          <li class="nav-item" hidden>
            <a class="nav-link" ng-class="{ active: isActive('/events') }" href="#!events">Evenimente</a>
          </li>
          <li class="nav-item" hidden>
            <a class="nav-link" ng-class="{ active: isActive('/blog') }" href="#!blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" ng-class="{ active: isActive('/student-links') }" href="#!student-links">Link-uri
              Studenți</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" ng-class="{ active: isActive('/contact') }" href="#!contact">Contact</a>
          </li>
          {{locationz}}
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
        <div class="dropdown d-none">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="{{langimg}}" />
            {{ lang }}
          </button>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item{{langdisable.ro}}" href="#!{{ hrefz.ro }}" ng-click='go()'><img
                  src="https://img.icons8.com/color/24/000000/romania-circular.png" />
                {{ langtext.ro }}</a>
            </li>
            <li>
              <a class="dropdown-item{{langdisable.en}}" href="#!{{ hrefz.en }}" ng-click='go()'><img
                  src="https://img.icons8.com/color/24/000000/usa-circular.png" />
                {{ langtext.en }}</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  
  <main role="main">
    <div ng-view></div>
  </main>

  <footer class="bg-secondary">
    <div class="container-fluid footer p-3 bg-dark-second bg-dark-opacity-50">
      <div class="container py-3">
        <div class="row" style="row-gap: 1rem">
          <div class="col-lg-4 col-md-6 col-sm-8 col-12">
            <img class="d-inline-block align-top" src="assets/img/cmm-500.jpg" alt="" width="50px" height="50px" />
            <h5 class="d-inline-block w-75 mx-2">
              Clubul de Management-Marketing
            </h5>
            <p class="text-justify mt-2">
              Cariera în CMM este o călătorie de 4 semestre care va da șansa
              membrilor să își dezvolte viziunea, abilitățile de lider, vocea
              și încrederea în aptitudinile personale. În cadrul programelor
              noastre vor învăța să coordoneze eficient echipe, cum să se facă
              văzuți, cum să se facă auziți, și cum să își organizeze eficient
              viața personală.
            </p>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-decoration-none link-white">
            <h5>Link-uri utile</h5>
            <div class="d-grid gap-2">
              <a href="#/!">Acasă</a>
              <a href="#!about-us" hidden>Despre Noi</a>
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
              <a href="https://guestcourses.rau.ro/index.php/course-program" target="_blank">Cursuri Extra</a>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-decoration-none link-white">
            <h5>Social</h5>
            <div class="d-grid gap-2">
              <a href="https://www.instagram.com/ura.clubmm/" target="_blank">Instagram</a>
              <a href="https://www.facebook.com/ClubMMURA/" target="_blank">Facebook</a>
              <a href="#!hall-of-fame" hidden>Contribuitori website</a>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-decoration-none link-white">
            <h5>Legal</h5>
            <div class="d-grid gap-2">
              <a href="http://privacy.rau.ro" target="_blank">GDPR</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid footer text-center p-3 bg-dark-second bg-dark-opacity-70">
      <p class="m-0">Copyright &copy; 2022 www.cmm-ura.org</p>
    </div>
  </footer>
  <!-- SCRIPTS -->
  
  <script>
    var app = angular.module("myApp", ["ngRoute"]);
    app.config(function ($routeProvider) {
      $routeProvider
        .when("/", {
          templateUrl: "main.htm"
          // controller: "widgetsController"
          // activetab: 'home'
        })
        .when("/about-us", {
          templateUrl: "about-us.htm"
        })
        .when("/student-links", {
          templateUrl: "student-links.htm"
        })
        .when("/contact", {
          templateUrl: "contact.htm"
        })
        .when("/recruitment", {
          templateUrl: "recruitment.htm"
        })
        .otherwise({
          templateUrl: "404.htm"
        });
    });
    app.controller("myCtrl", function ($scope, $location) {
      
      $scope.isActive = function (route) {
        return route === $location.path();
      };

      // $scope.href = $location.path().substring(1);
      console.log("outside");
      console.log($scope.href);

      // FIXME Solve the problem
      $scope.go = function() {
        if($scope.langtag == "ro")
        {
          $scope.langtext = {
            ro: "Română",
            en: "Engleză",
          };
        }else{
          $scope.langtext = {
            ro: "Romanian",
            en: "English",
          };
        }

        $scope.href = $location.path().substring(1);
        console.log("inside");
        console.log($scope.href);

        if($location.path().slice(0,4) == "/en/"){
          $scope.langtag = "en";
          $scope.lang = "English";
          $scope.langimg = "https://img.icons8.com/color/24/000000/usa-circular.png";
          $scope.langdisable = {
            ro: "",
            en: " disabled"
          }
          $scope.hrefz = {
            ro: $scope.href.substring(3),
            en: $scope.href
          }
        }else{
          $scope.langtag = "ro";
          $scope.lang = "Română";
          $scope.langimg = "https://img.icons8.com/color/24/000000/romania-circular.png";
          $scope.langdisable = {
            ro: " disabled",
            en: ""
          }
          $scope.hrefz = {
            ro: $scope.href,
            en: "en/" + $scope.href
          }
        }
      }

      // location.reload()

      $scope.go();

    });
    // app.controller("en", function ($scope) {
    //   $scope.lang = "English";
    //   $scope.langTag = function() {
    //       $scope.langtag = "en";
    //   }
    //   $scope.langtext = {
    //     ro: "Romanian",
    //     en: "English",
    //   };
    // });
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>