@extends('admin')


@section('content')

    <h2>Upload New Movie</h2>

    {!! Form::open(array('url' => '/admin/movies/store', 'files'=> true)) !!}

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" class="form-control" name="Title" value="">
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <?php echo Form::select('Category', array('Comedy' => 'Comedy', 'Drama' => 'Drama'), null, array('class' => 'form-control')); ?>
    </div>
    <div class="form-group">

    </div>
    <div class="form-group">
        <div class="col-md-3">
            <label for="image">Image</label>
            <?php echo Form::file('Img'); ?>
        </div>
        <div class="col-md-3">
            {{--<h4 class="text-center">Current Image</h4>--}}
            {{--<img class="center-block" src="/images/thumbs/{{$movie->Img}}" alt="{{$movie->Img}}">--}}
        </div>

        <div class="col-md-3">
            <label for="video">Video</label>
            <?php echo Form::file('Video'); ?>
        </div>
        <div class="col-md-3">
            {{--<h4 class="text-center">Current Video</h4>--}}
            {{--<video id="vidSample" class="video-js vjs-default-skin"--}}
                   {{--controls preload="auto" width="640" height="264"--}}
                   {{--poster="images/thumbs/familyguy.jpg"--}}
                   {{--data-setup='{"example_option":true}'>--}}
                {{--<source src="/videos/{{$movie->Video}}" type='video/mp4' />--}}
                {{--<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>--}}
            {{--</video>--}}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input class="btn btn-success" type="submit" value="Upload Video">
        </div>
    </div>


    {!! Form::close() !!}





@stop
