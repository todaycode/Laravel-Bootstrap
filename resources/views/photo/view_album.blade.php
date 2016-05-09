<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD:resources/views/site/photo/view_album.blade.php
@extends('site.layouts.default') @section('title') {{{
$photo_album->name }}} :: @parent @stop @section('content')
<h3>{{{ $photo_album->name }}}</h3>

<div id="mygallery">
	@foreach($photos as $item) 
	<a
		href="{{{'../../appfiles/photoalbum/'.$photo_album->folderid.'/'.$item->filename }}}"
		data-lightbox="roadtrip"> <img alt="{{$item->name}}"
		src="{{{'../../appfiles/photoalbum/'.$photo_album->folderid.'/thumbs/'.$item->filename }}}" />
	</a> 
	@endforeach
</div>
@stop @section('scripts')
<script>
        $("#mygallery").justifiedGallery();
    </script>
@stop
=======
@extends('app') @section('title') {{{
$photo_album->name }}} :: @parent @stop @section('content')
<h3>{{{ $photo_album->name }}}</h3>
=======
@extends('app') @section('title') {!!
$photo_album->name !!} :: @parent @stop @section('content')
<h3>{!! $photo_album->name !!}</h3>
>>>>>>> c9577f5... show photo in article

=======
@extends('layouts.app')
@section('title')
<<<<<<< HEAD
<<<<<<< HEAD
	{!! $photo_album->name !!} :: @parent @stop @section('content')
<h3>{!! $photo_album->name !!}</h3>
>>>>>>> 6ef6597... small fix in photo frontend
<div id="mygallery">
	@foreach($photos as $item) 
	<a
		href="{!! URL::to('appfiles/photoalbum/'.$photo_album->folder_id.'/thumbs/'.$item->filename) !!}"
		data-lightbox="roadtrip"> <img alt="{{$item->name}}"
		src="{!!URL::to('appfiles/photoalbum/'.$photo_album->folder_id.'/'.$item->filename) !!}" />
	</a> 
	@endforeach
</div>
@stop @section('scripts')
<script>
=======
    {!! $photo_album->name !!} :: @parent @stop @section('content')
=======
    {!! $photo_album->name !!} :: @parent @endsection
@section('content')
>>>>>>> 6a9904b... endsection fix in views
    <h3>{!! $photo_album->name !!}</h3>
    <div id="mygallery">
        @foreach($photos as $item)
            <a href="{!! url('appfiles/photoalbum/'.$photo_album->folder_id.'/'.$item->filename) !!}">
                <img alt="{{$item->name}}" src="{!!url('appfiles/photoalbum/'.$photo_album->folder_id.'/'.$item->filename) !!}"/>
            </a>
        @endforeach
    </div>
@endsection
@section('scripts')
    <script>
>>>>>>> c96159c... fixed photo upload
        $("#mygallery").justifiedGallery();
    </script>
<<<<<<< HEAD
@stop
>>>>>>> 47d9a04... Started use of gulp and package.json for less or sass compilation.:resources/views/photo/view_album.blade.php
=======
@endsection
>>>>>>> 6a9904b... endsection fix in views
