<<<<<<< HEAD
<<<<<<< HEAD
@extends('admin.layouts.modal') @section('content')
<ul class="nav nav-tabs">
	<li class="active"><a href="#tab-general" data-toggle="tab">{{
			Lang::get("admin/modal.general") }}</a></li>
</ul>
<form id="deleteForm" class="form-horizontal" method="post"
	action="{{ URL::to('admin/language/' . $language . '/delete') }}"
	autocomplete="off">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> <input
		type="hidden" name="id" value="{{ $language }}" />
	<div class="form-group">
		<div class="controls">
			{{ Lang::get("admin/modal.delete_message") }}<br>
			<element class="btn btn-warning btn-sm close_popup">
			<span class="glyphicon glyphicon-ban-circle"></span> {{
			Lang::get("admin/modal.cancel") }}</element>
			<button type="submit" class="btn btn-sm btn-danger">
				<span class="glyphicon glyphicon-trash"></span> {{
				Lang::get("admin/modal.delete") }}
			</button>
		</div>
	</div>
</form>
@stop
=======
@extends('admin.layouts.modal') @section('content')
<form id="deleteForm" class="form-horizontal" method="post"
	action="{{ URL::to('admin/language/' . $language . '/delete') }}"
	autocomplete="off">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> <input
		type="hidden" name="id" value="{{ $language }}" />
	<div class="form-group">
		<div class="controls">
			{{ trans("admin/modal.delete_message") }}<br>
			<element class="btn btn-warning btn-sm close_popup">
			<span class="glyphicon glyphicon-ban-circle"></span> {{
=======
@extends('admin.layouts.modal')
@section('content')
    {!! Form::model($language, array('url' => URL::to('admin/language') . '/' . $language->id, 'method' => 'delete', 'class' => 'bf', 'files'=> true)) !!}
    <div class="form-group">
        <div class="controls">
            {{ trans("admin/modal.delete_message") }}<br>
            <element class="btn btn-warning btn-sm close_popup">
                <span class="glyphicon glyphicon-ban-circle"></span> {{
>>>>>>> 542a1d5... new look with meny fixes in view, controllers and models and many more
			trans("admin/modal.cancel") }}</element>
            <button type="submit" class="btn btn-sm btn-danger">
                <span class="glyphicon glyphicon-trash"></span> {{
				trans("admin/modal.delete") }}
            </button>
        </div>
    </div>
    {!! Form::close() !!}
@stop
>>>>>>> 75c9bc1... delete roles for users and fix translate functionality
