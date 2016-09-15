@extends('app')

@section('header')
  
    <title>Laravel &raquo; Artikel &raquo; All</title>

@endsection

@section('content')
    <a class="waves-effect waves-light btn right" href="{{url('artikel/add')}}">Add New</a>

    <table>
       <head>
          <tr>
              <th>Title</th>
              <th>Content</th>
              <th>Author</th> 
              <th>Created at</th>
              <th colspan="2">Action</th>
          </tr>
        </head>
            @foreach($artikel as $key)
            <tr>
            	<td>{{$key->title}}</td>
            	<td>{{$key->contens}}</td>
            	<td>{{$key->user_id}}</td>
            	<td>{{$key->created_at}}</td>
            	<td><a href="{{url('artikel/edit/'.$key->id)}}">Edit</a></td>
            	<td><a href="{{url('artikel/delete/'.$key->id)}}" onclick="return confirm('Are you sure to delete {{$key->title}}?')">Delete</a></td>
            </tr>
            @endforeach
            @if(sizeof($artikel)==0)
            	<tr>
            		<td colspan="6" class="center">
            			<div>No Data</div>
            			<div><a href="{{url('artikel/add')}}" class="waves-effect waves-light btn">Add New</a></div>
            		</td>
            	</tr>
            @endif
         </tbody>
       </table>
@endsection