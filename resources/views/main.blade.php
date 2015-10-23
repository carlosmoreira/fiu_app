<!doctype html>
<html lang="en" ng-app="fiuMovies">
<head>
    <meta charset="UTF-8">
    <title>FIU Movies</title>

    <link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/jquery-ui/jquery-ui.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="libs/sweetalert/dist/sweetalert.css">
    <script src="libs/sweetalert/dist/sweetalert.min.js"></script>
    <script src="libs/angular/angular.min.js"></script>
    <script src="libs/angular-route/angular-route.min.js"></script>
    <script src="libs/angular-ui-sortable/sortable.min.js"></script>

    <link href="http://vjs.zencdn.net/5.0.0/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 -->
    <script src="http://vjs.zencdn.net/ie8/1.1.0/videojs-ie8.min.js"></script>
</head>
<body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="pull-left">Fiu Movies</h2>
            </div>
        </div>
    </div>
</header>


<div id="main">

    <ng-view>

    </ng-view>
</div>

<script src="app/app.js"></script>

</body>
</html>