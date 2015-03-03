<<<<<<< HEAD:resources/views/site/video/view_album.blade.php
@extends('site.layouts.default') @section('title') {{{
$video_album->name }}} :: @parent @stop @section('content')
<h3>{{{ $video_album->name }}}</h3>

<div id="mygallery">
	@foreach($videos as $item)
	<iframe width="0" height="0"></iframe>
	<iframe width="480" height="360"
		src="//www.youtube.com/embed/{{$item -> youtube}}" frameborder="0"
		allowfullscreen></iframe>
	@endforeach
</div>
@stop
=======
@extends('app') @section('title') {{{
$video_album->name }}} :: @parent @stop @section('content')
<h3>{{{ $video_album->name }}}</h3>

<div id="mygallery">
	@foreach($videos as $item)
	<iframe width="0" height="0"></iframe>
	<iframe width="480" height="360"
		src="//www.youtube.com/embed/{{$item -> youtube}}" frameborder="0"
		allowfullscreen></iframe>
	@endforeach
</div>
@stop
>>>>>>> 47d9a04... Started use of gulp and package.json for less or sass compilation.:resources/views/video/view_album.blade.php
