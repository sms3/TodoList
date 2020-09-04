@extends('layouts.app')


@section('content')
<div class="col-md-12">
<div class="card">
    <div class="card-header">
        
<br><br>
<a href="/" uk-icon="icon:arrow-left" class="uk-position-left uk-margin-top with-3d-shadow "></a>
<h1>{{$todo->text}}</h1>
<div class="badge badge-danger">{{$todo->due}}</div><hr>
<p>{{$todo->body}}</p>
<br><br>

{!! Form::open(['action' =>['TodosController@destroy',$todo->id],'method'=>'POST','class'=>'pull-right']) !!}
{{ Form::hidden('_method','DELETE')}}
<a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">Edit</a>
{{ Form::bsSubmit('Delete',['class'=>'btn btn-danger']) }}
{!! Form::close() !!}
@endsection