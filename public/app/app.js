var fiuMovies =

    angular.module('fiuMovies', ['ngRoute'])

        .config(function ($routeProvider) {

            var tmpl = "app/views/";

            $routeProvider
                .when('/', {
                    controller: 'stepOneController',
                    templateUrl: tmpl  + 'step1.html',
                })
                .when('/stepTwo', {
                    controller: 'stepTwoController',
                    templateUrl: tmpl  + 'step2.html',
                })
                .when('/stepThree', {
                    controller: 'stepThreeController',
                    templateUrl: tmpl  + 'step3.html',
                })
                .when('/stepFour', {
                    controller: 'stepFourController',
                    templateUrl: tmpl  + 'step4.html',
                })
                .otherwise({
                    redirectTo: '/'
                });
        });

fiuMovies.controller('MainCtrl', function ($scope) {

});

fiuMovies.factory('User', function(){

    var user = null;

    var setUser = function(u){
        user = u;
    }

    var getUser = function(){
        return user;
    }

    return {
        getUser : getUser,
        setUser : setUser
    }
});

fiuMovies.factory('moviesCart', function(){

    var movies = [];

    var broadCast = function(){
        //$rootScope.$broadcast('movieCartChange');
    }

    var add = function(movie){
        movies.push(movie);
        broadCast();
    };

    var remove = function(movie){
        for(var i = 0; i<movies.length ; i++){
            if(movie.Id == movies[i].Id){
                movies.splice(i, 1);
            }
        }
    };

    var get = function(movie){
        return movies;
    };

    var getAll = function(){
        return movies;
    };

    var isInCart = function(movie){
        for(var i = 0; i<movies.length ; i++){
            if(movie.Id == movies[i].Id){
                return true;
            }
        }
        return false;
    }

    return {
        add : add,
        remove : remove,
        get : get,
        getAll : getAll,
        isInCart : isInCart
    }
});


fiuMovies.controller('stepOneController', function ($scope, $location, User) {
    $scope.user = {
        firstName : "Carlos",
        lastName : "Moreira",
        email : "user@fiu.edu"
    }
    $scope.finishStep1 = function(){
        User.setUser($scope.user);
        $location.path('stepTwo');
    }
});


fiuMovies.service('MovieService', function($http){
    return {
        all : function(){
            return $http.get('api/movies');
        }
    }
});

fiuMovies.controller('stepTwoController', function ($scope, $location, moviesCart, MovieService ) {

    $scope.movies  = null;


    MovieService.all().then(function(response){
        $scope.movies = response.data;
        console.log(response.data);
    }, function(err){
        console.log(err)
    });

    var getSelectedMovies = function(){
        $scope.selectedMovies = moviesCart.getAll();
    }

    $scope.addMovie = function(movie){
        moviesCart.add(movie);
        getSelectedMovies();
    }


    $scope.finshAdding = function(){
        $location.path('stepthree')
    };

    $scope.removeFromCart = function(movie){
        moviesCart.remove(movie);
        getSelectedMovies();
    };

    $scope.isInCart = function(movie){
        return moviesCart.isInCart(movie);
    }

    $scope.finishAddMovies = function(){

        $location.path('stepThree');

    }
});

fiuMovies.controller('stepThreeController', function ($scope, moviesCart , $location) {

    $scope.movies = moviesCart.getAll();
    console.log("all", moviesCart.getAll());

});

fiuMovies.controller('stepFourController', function ($scope, $location) {

});