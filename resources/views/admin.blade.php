<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="/libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/libs/jquery/dist/jquery.min.js"></script>
    <script src="/libs/jquery-ui/jquery-ui.min.js"></script>
    <script src="/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/libs/sweetalert/dist/sweetalert.css">
    <script src="/libs/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>


<div class="container">
    <h2 class="pull-left">Administration Area</h2>
    <h3 class="pull-right">
        <a href="/auth/logout" class="btn btn-danger"> <i class="glyphicon "></i> Logout</a>
    </h3>


    <div class="btn-group btn-group-justified" role="group" aria-label="...">

        <div class="btn-group" role="group">
            <a href="/admin/movies/new" class="btn btn-default">Add Movie</a>
        </div>
        <div class="btn-group" role="group">
            <a href="/admin/movies" class="btn btn-default">Manage Movies</a>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default" onclick="alert('Coming Soon');">View Results</button>
        </div>

    </div>
</div>

<div class="container">
    @yield('content')
</div>
</body>
</html>