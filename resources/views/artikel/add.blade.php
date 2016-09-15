@extends('app')

@section('header')

  <title>Laravel &raquo; artikel &raquo; Add</title>

@endsection

@section('content')

  <div class="row">
    <form class="col s12" method="POST" action="{{url('artikel/save')}}">
      <div class="input-field col s12">
        <input id="title" type="text" name="title" class="validate">
        <label>Title</label>
      </div>
      <div class="input-field col s12">
        <textarea id="contens" type="text" class="materialize-textarea" name="contens"></textarea>
        <label for="contens">Content</label>
      </div>
      <div class="right">
        <button type="submit" class="btn">Save</button>
      </div>
      <input type="Hidden" name="_token" value="{{csrf_token()}}">
      
    </form>
  </div>

@endsection