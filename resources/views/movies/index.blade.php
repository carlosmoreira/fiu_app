@extends('admin')


@section('content')

    <h2>All Movies <a style="font-size:14px;" href="/admin/movies/new"> <i class="glyphicon glyphicon-plus"></i> Add New
        </a></h2>

    <table class="table table-odd">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        @foreach ($movies as $movie)
            <tr>
                <td>{{$movie->id}}</td>
                <td>{{$movie->Title}}</td>
                <td>{{$movie->Category}}</td>
                <td>
                    <a class="btn btn-success" href="movies/update/{{$movie->id}}">Update</a>
                    <button class="btn btn-danger deleteMovie" todel="{{$movie->id}}">Delete</button>
                </td>
            </tr>
        @endforeach
    </table>

    <script>
        $(document).ready(function () {
            $('.deleteMovie').click(function () {
                var id = $(this).attr('todel');
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function () {

                    $.get('/admin/movies/delete', {
                        idtoremove: id
                    }).success(function (response) {
                        console.log('Deleting...');
                        location.reload()
                    }).error(function (err) {
                        console.log('Error', err);
                    });

                });


            });
        });
    </script>


@stop