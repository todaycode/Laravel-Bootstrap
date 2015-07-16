<<<<<<< HEAD:resources/views/site/news/view_news.blade.php
@extends('site.layouts.default') {{-- Web site Title --}}
@section('title') {{{ $news->title }}} :: @parent @stop

@section('meta_author')
<meta name="author" content="{{{ $news->author->username }}}" />
@stop {{-- Content --}} @section('content')
<h3>{{ $news->title }}</h3>
<p>{!! $news->introduction() !!}</p>
<p>{!! $news->content() !!}</p>
<div>
	<span class="badge badge-info">Posted {{{ $news->created_at }}}</span>
</div>
@stop
=======
@extends('app') {{-- Web site Title --}}
@section('title') {{{ $news->title }}} :: @parent @stop

@section('meta_author')
<meta name="author" content="{{{ $news->author->username }}}" />
@stop {{-- Content --}} @section('content')
<h3>{{ $news->title }}</h3>
<p>{{ $news->introduction() }}</p>
<p>{{ $news->content() }}</p>
<div>
	<span class="badge badge-info">Posted {{{ $news->created_at }}}</span>
</div>
@stop
>>>>>>> 47d9a04... Started use of gulp and package.json for less or sass compilation.:resources/views/news/view_news.blade.php
