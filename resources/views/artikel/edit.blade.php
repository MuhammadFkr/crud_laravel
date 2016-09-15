@extends('app')

@section('header')

	<title>Laravel &raquo; artikel &raquo; Add</title>

@endsection

@section('content')

	<div class="row">
		<form class="col s12" method="POST" action="{{url('artikel/update')}}">
			<div class="input-field col s12">
				<input id="title" type="text" name="title" class="validate" value="{{$artikel->title}}">
				<label for="title">Title</label>
			</div>
			<div class="input-field col s12">
				<textarea id="contens" type="text" class="materialize-textarea" name="contents">{{$artikel->contens}}</textarea>
				<label for="contens">Contens</label>
			</div>
			<div class="right">
				<button type="submit" class="btn">Save</button>
			</div>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			
			<input type="hidden" name="id" value="{{$artikel->id}}">
		</form>
	</div>

@endsection