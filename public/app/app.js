var fiuMovies =

    angular.module('fiuMovies', ['ngRoute', 'ui.sortable'])

        .config(function ($routeProvider) {

            var tmpl = "app/views/";

            $routeProvider
                .when('/', {
                    controller: 'stepOneController',
                    templateUrl: tmpl + 'step1.html',
                })
                .when('/stepTwo', {
                    controller: 'stepTwoController',
                    templateUrl: tmpl + 'step2.html',
                })
                .when('/stepThree', {
                    controller: 'stepThreeController',
                    templateUrl: tmpl + 'step3.html',
                })
                .when('/stepFour', {
                    controller: 'stepFourController',
                    templateUrl: tmpl + 'step4.html',
                })
                .otherwise({
                    redirectTo: '/'
                });
        });

fiuMovies.controller('MainCtrl', function ($scope) {

});

fiuMovies.factory('User', function () {

    var user = null;

    var setUser = function (u) {
        user = u;
    }

    var getUser = function () {
        return user;
    }

    return {
        getUser: getUser,
        setUser: setUser
    }
});

fiuMovies.factory('moviesCart', function () {

    var movies = [];
    var orderedMovies = [];

    var broadCast = function () {
        //$rootScope.$broadcast('movieCartChange');
    }

    var setOrderMovies = function(movies){
        orderedMovies = movies;
    }

    var getOrderedMovies = function(){
        return orderedMovies;
    }

    var add = function (movie) {
        movies.push(movie);
        broadCast();
    };

    var remove = function (movie) {
        for (var i = 0; i < movies.length; i++) {
            if (movie.Id == movies[i].Id) {
                movies.splice(i, 1);
            }
        }
    };

    var get = function (movie) {
        return movies;
    };

    var getAll = function () {
        return movies;
    };

    var isInCart = function (movie) {
        //console.log(movie);
        for (var i = 0; i < movies.length; i++) {
            if (movie.id == movies[i].id) {
                //console.log("Found: ", movie.Id);
                return true;
            }
        }
        return false;
    }

    return {
        add: add,
        remove: remove,
        get: get,
        getAll: getAll,
        isInCart: isInCart,
        setOrderMovies : setOrderMovies,
        getOrderedMovies : getOrderedMovies
    }
});


fiuMovies.controller('stepOneController', function ($scope, $location, User) {
    //$scope.user = {
    //    firstName: "Carlos",
    //    lastName: "Moreira",
    //    email: "user@fiu.edu"
    //}
    $scope.finishStep1 = function () {
        User.setUser($scope.user);
        $location.path('stepTwo');
    }
});


fiuMovies.service('MovieService', function ($http) {
    return {
        all: function () {
            return $http.get('api/movies');
        }
    }
});

fiuMovies.controller('stepTwoController', function ($scope, $location, moviesCart, MovieService) {

    $scope.movies = null;


    MovieService.all().then(function (response) {
        $scope.movies = response.data;
        console.log(response.data);
    }, function (err) {
        console.log(err)
    });

    var getSelectedMovies = function () {
        $scope.selectedMovies = moviesCart.getAll();
    }

    $scope.addMovie = function (movie) {
        moviesCart.add(movie);
        getSelectedMovies();
    }


    $scope.finshAdding = function () {
        $location.path('stepthree')
    };

    $scope.removeFromCart = function (movie) {
        moviesCart.remove(movie);
        getSelectedMovies();
    };

    $scope.isInCart = function (movie) {
        return moviesCart.isInCart(movie);
    }

    $scope.finishAddMovies = function () {

        $location.path('stepThree');

    }
});

fiuMovies.controller('stepThreeController', function ($scope, $http, moviesCart, $location, User) {

    $scope.movies = moviesCart.getAll();
    console.log("all", moviesCart.getAll());

    //$scope.movies = [
    //    {
    //        "Id": 1,
    //        "Title": "Big Bang Theory",
    //        "Img": "bigbangtheory.jpg",
    //        "Video": "bigbangtheory.flv",
    //        "Category": "Comedy"
    //    },
    //    {
    //        "Id": 7,
    //        "Title": "Family Guy",
    //        "Img": "familyguy.jpg",
    //        "Video": "familyguy.flv",
    //        "Category": "Comedy"
    //    },
    //    {
    //        "Id": 8,
    //        "Title": "Friends",
    //        "Img": "friends.jpg",
    //        "Video": "Friends.flv",
    //        "Category": "Comedy"
    //    },
    //    {
    //        "Id": 10,
    //        "Title": "Futurama",
    //        "Img": "futurama.jpg",
    //        "Video": "futurama.flv",
    //        "Category": "Comedy"
    //    },
    //    {
    //        "Id": 15,
    //        "Title": "How I Met Your Mother",
    //        "Img": "howImet.jpg",
    //        "Video": "howImet.flv",
    //        "Category": "Comedy"
    //    },
    //    {
    //        "Id": 20,
    //        "Title": "The Cleveland Show",
    //        "Img": "cleveland.jpg",
    //        "Video": "cleveland.flv",
    //        "Category": "Comedy"
    //    }
    //];

    $scope.sortOptions = {
        'ui-floating': true,
        update: function (e, ui) {
            console.log($scope.movies);
        }
    }

    $scope.finishOrdering = function () {
        swal({
            title: "Are you sure?",
            text: "This is the last step, You will not be able to change your answers. Are you sure you want to finish?",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, I'm Done!",
            closeOnConfirm: true
        }, function () {
            moviesCart.setOrderMovies($scope.movies);
            
            $http.post('api/result', {
                'user' : User.getUser(),
                'movies' : $scope.movies
            }).then(function(response){
                console.log(response);
                $location.path('stepFour');
                //$scope.$apply();
            }, function(err){console.log(err);})


        });
        console.log($scope.movies);
    };

    var updateMovie = function(movie){
        var movies = $scope.movies;
        for(var i = 0 ; i < movies.length ; i++){
            if(movie.Id == movies[i].Id){
                movies[i] = movie;
            }
        }
        $scope.movies = null;
        $scope.movies = movies;
    };

    $scope.playMovie = function (movie) {
        console.log(movie);
        $scope.selectedMovie = movie;
        $('#playMovieModal').modal('show');
        $('#playMovieModal').on('hidden.bs.modal', function () {
            //alert('modal Close');

            videojs('vidSample').player().pause()
            var playTime = videojs('vidSample').player().currentTime();
            if(playTime > 0){
                $scope.selectedMovie.played = 1;
                $scope.selectedMovie.watched_length = playTime;
                updateMovie($scope.selectedMovie);
            }else{
                console.log('never played');
            }
        });

    };



});

fiuMovies.controller('stepFourController', function ($scope,User,moviesCart) {
    $scope.user = User.getUser();
    $scope.movies = moviesCart.getOrderedMovies();
});










