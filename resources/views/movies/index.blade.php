@extends('admin')


@section('content')

    <h2>All Movies <a style="font-size:14px;" href="/admin/movies/new"> <i class="glyphicon glyphicon-plus"></i> Add New </a> </h2>

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
                </td>
            </tr>
        @endforeach
    </table>


@stop