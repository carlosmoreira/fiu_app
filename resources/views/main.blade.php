<!doctype html>
<html lang="en" ng-app="fiuMovies">
<head>
    <meta charset="UTF-8">
    <title>FIU Movies</title>

    <link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="libs/angular/angular.min.js"></script>
    <script src="libs/angular-route/angular-route.min.js"></script>

</head>
<body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Fiu Movies</h2>
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