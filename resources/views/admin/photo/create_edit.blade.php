<<<<<<< HEAD
<<<<<<< HEAD
@extends('admin.layouts.modal') {{-- Content --}} @section('content')
<!-- Tabs -->
<ul class="nav nav-tabs">
	<li class="active"><a href="#tab-general" data-toggle="tab"> {{
			Lang::get("admin/modal.general") }}</a></li>
</ul>
<!-- ./ tabs -->
{{-- Edit Blog Form --}}
<form class="form-horizontal" id="fupload" enctype="multipart/form-data"
	method="post"
	action="@if(isset($photo)){{ URL::to('admin/photo/'.$photo->id.'/edit') }}
	        @else{{ URL::to('admin/photo/create') }}@endif"
	autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<!-- ./ csrf token -->
	<!-- Tabs Content -->
	<div class="tab-content">
		<!-- General tab -->
		<div class="tab-pane active" id="tab-general">
			<div class="tab-pane active" id="tab-general">
				<div
					class="form-group {{{ $errors->has('language_id') ? 'has-error' : '' }}}">
					<div class="col-md-12">
						<label class="control-label" for="language_id">{{
							Lang::get("admin/admin.language") }}</label> <select
							style="width: 100%" name="language_id" id="language_id"
							class="form-control"> @foreach($languages as $item)
							<option value="{{$item->id}}"
								@if(!empty($language))
                                        @if($item->id==$language)
								selected="selected" @endif @endif >{{$item->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div
					class="form-group {{{ $errors->has('name') ? 'has-error' : '' }}}">
					<div class="col-md-12">
						<label class="control-label" for="name"> {{
							Lang::get("admin/modal.title") }}</label> <input
							class="form-control" type="text" name="name" id="name"
							value="{{{ Input::old('name', isset($photo) ? $photo->name : null) }}}" />
						{!!$errors->first('name', '<span class="help-block">:message </span>')!!}
					</div>
				</div>
				<div
					class="form-group {{{ $errors->has('photo_album_id') ? 'error' : '' }}}">
					<div class="col-md-12">
						<label class="control-label" for="photo_album_id">{{
							Lang::get("admin/photo.album") }}</label> <select
							style="width: 100%" name="photo_album_id" id="photo_album_id"
							class="form-control"> @foreach($photoalbums as $item)
							<option value="{{$item->id}}"
								@if(!empty($photoalbum))
                                        @if($item->id==$photoalbum)
								selected="selected" @endif @endif >{{$item->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div
					class="form-group {{{ $errors->has('slider') ? 'has-error' : '' }}}">
					<div class="col-lg-12">
						<label class="control-label" for="slider">{{{
							Lang::get('admin/photo.slider') }}}</label> <label class="radio">
							{!! Form::radio('slider', 1, (Input::old('slider') == '1' ||
							(isset($photo) && $photo->slider == '1')) ? true : false,
							array('id'=>'slider', 'class'=>'radio')) !!} {{{
							Lang::get('admin/admin.yes') }}} </label> <label class="radio">
							{!! Form::radio('slider', 0, (Input::old('slider') == '0' ||
							(isset($photo) && $photo->slider == '0') || !isset($photo)) ?
							true : false, array('id'=>'slider', 'class'=>'radio')) !!} {{{
							Lang::get('admin/admin.no') }}} </label>

					</div>
				</div>
				<div
					class="form-group {{{ $errors->has('album_cover') ? 'has-error' : '' }}}">
					<div class="col-lg-12">
						<label class="control-label" for="album_cover">{{{
							Lang::get('admin/photo.album_cover') }}}</label> <label
							class="radio"> {!! Form::radio('album_cover', 1,
							(Input::old('album_cover') == '1' || (isset($photo) &&
							$photo->album_cover == '1')) ? true : false,
							array('id'=>'showtitle', 'class'=>'radio')) !!} {{{
							Lang::get('admin/admin.yes') }}} </label> <label class="radio">
							{!! Form::radio('album_cover', 0, (Input::old('album_cover') ==
							'0' || (isset($photo) && $photo->album_cover == '0') ||
							!isset($photo)) ? true : false, array('id'=>'showtitle',
							'class'=>'radio')) !!} {!! Lang::get('admin/admin.no') !!} </label>

					</div>
				</div>
				<div
					class="form-group {{{ $errors->has('content') ? 'has-error' : '' }}}">
					<div class="col-md-12">
						<label class="control-label" for="description">{{
							Lang::get("admin/photo.description") }}</label>
						<textarea class="form-control full-width wysihtml5"
							name="description" rows="10">{{{ Input::old('content', isset($photo) ? $photo->description : null) }}}</textarea>
						{!! $errors->first('description', '<label class="control-label">:message</label>')
						!!}
					</div>
				</div>

				<div
					class="form-group {{{ $errors->has('image') ? 'error' : '' }}}">
					<div class="col-lg-12">
						<label class="control-label" for="image">{{
							Lang::get("admin/photo.picture") }}</label> <input name="image"
							type="file" class="uploader" id="image" value="Upload" />
					</div>

				</div>
				<!-- ./ general tab -->
			</div>
			<!-- ./ tabs content -->

			<!-- Form Actions -->

			<div class="form-group">
				<div class="col-md-12">
					<button type="reset" class="btn btn-sm btn-warning close_popup">
						<span class="glyphicon glyphicon-ban-circle"></span> {{
						Lang::get("admin/modal.cancel") }}
					</button>
					<button type="reset" class="btn btn-sm btn-default">
						<span class="glyphicon glyphicon-remove-circle"></span> {{
						Lang::get("admin/modal.reset") }}
					</button>
					<button type="submit" class="btn btn-sm btn-success">
						<span class="glyphicon glyphicon-ok-circle"></span>
						@if	(isset($photo)) 
						  {{ Lang::get("admin/modal.edit") }} 
						@else 
						  {{Lang::get("admin/modal.create") }} 
						 @endif
					</button>
				</div>
			</div>
			<!-- ./ form actions -->

</form>
@stop
=======
@extends('admin.layouts.modal') {{-- Content --}} @section('content')
<!-- Tabs -->
=======
@extends('admin.layouts.modal')
{{-- Content --}}
@section('content')
        <!-- Tabs -->
>>>>>>> 542a1d5... new look with meny fixes in view, controllers and models and many more
<ul class="nav nav-tabs">
    <li class="active"><a href="#tab-general" data-toggle="tab"> {{
			trans("admin/modal.general") }}</a></li>
</ul>
<!-- ./ tabs -->
@if (isset($photo))
{!! Form::model($photo, array('url' => URL::to('admin/photo') . '/' . $photo->id, 'method' => 'put','id'=>'fupload','class' => 'bf', 'files'=> true)) !!}
@else
{!! Form::open(array('url' => URL::to('admin/photo'), 'method' => 'post', 'class' => 'bf','id'=>'fupload', 'files'=> true)) !!}
@endif
        <!-- Tabs Content -->
<div class="tab-content">
    <!-- General tab -->
    <div class="tab-pane active" id="tab-general">
        <div class="form-group  {{ $errors->has('language_id') ? 'has-error' : '' }}">
            {!! Form::label('language_id', trans("admin/admin.language"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::select('language_id', $languages, @isset($photo)? $photo->language_id : 'default', array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('language_id', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name', trans("admin/modal.title"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('name', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('name', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('photo_album_id') ? 'has-error' : '' }}">
            {!! Form::label('photo_album_id', trans("admin/photo.album"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::select('photo_album_id', $photoalbums, @isset($photo)? $photo->photo_album_id : 'default', array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('photo_album_id', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('slider') ? 'has-error' : '' }}">
            {!! Form::label('slider', trans("admin/photo.slider"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::label('slider', trans("admin/admin.yes"), array('class' => 'control-label')) !!}
                {!! Form::radio('slider', '1', @isset($photo)? $photo->photo_album_id : 'false') !!}
                {!! Form::label('slider', trans("admin/admin.no"), array('class' => 'control-label')) !!}
                {!! Form::radio('slider', '0', @isset($photo)? $photo->photo_album_id : 'true') !!}
                <span class="help-block">{{ $errors->first('slider', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('album_cover') ? 'has-error' : '' }}">
            {!! Form::label('album_cover', trans("admin/photo.album_cover"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::label('album_cover', trans("admin/admin.yes"), array('class' => 'control-label')) !!}
                {!! Form::radio('album_cover', '1', @isset($photo)? $photo->photo_album_id : 'false') !!}
                {!! Form::label('album_cover', trans("admin/admin.no"), array('class' => 'control-label')) !!}
                {!! Form::radio('album_cover', '0', @isset($photo)? $photo->photo_album_id : 'true') !!}
                <span class="help-block">{{ $errors->first('album_cover', ':message') }}</span>
            </div>
        </div>

        <div class="form-group  {{ $errors->has('description') ? 'has-error' : '' }}">
            {!! Form::label('description', trans("admin/photo.description"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('description', ':message') }}</span>
            </div>
        </div>

        <div
                class="form-group {{ $errors->has('image') ? 'error' : '' }}">
            <div class="col-lg-12">
                <label class="control-label" for="image">
                    {{ trans("admin/photo.picture") }}</label>
                <input name="image" type="file" class="uploader" id="image" value="Upload"/>
            </div>

        </div>
        <!-- ./ general tab -->
    </div>
    <!-- ./ tabs content -->

    <!-- Form Actions -->

    <div class="form-group">
        <div class="col-md-12">
            <button type="reset" class="btn btn-sm btn-warning close_popup">
                <span class="glyphicon glyphicon-ban-circle"></span> {{
						trans("admin/modal.cancel") }}
            </button>
            <button type="reset" class="btn btn-sm btn-default">
                <span class="glyphicon glyphicon-remove-circle"></span> {{
						trans("admin/modal.reset") }}
            </button>
            <button type="submit" class="btn btn-sm btn-success">
                <span class="glyphicon glyphicon-ok-circle"></span>
                @if	(isset($photo))
                    {{ trans("admin/modal.edit") }}
                @else
                    {{trans("admin/modal.create") }}
                @endif
            </button>
        </div>
    </div>
    <!-- ./ form actions -->
{!! Form::close() !!}
</div>
@stop
>>>>>>> 75c9bc1... delete roles for users and fix translate functionality
