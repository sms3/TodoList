@extends('layouts.app')
@section('content')
<br><hr>
<h1>Create Tasks</h1>

{!! Form::open(['action' =>'TodosController@store','method'=>'POST']) !!}
{{ Form::bsText('text')}}
{{ Form::bsTextArea('body')}}
{{ Form::bsText('due') }}
{{ Form::bsSubmit('Submit',['class'=>'btn btn-success']) }}
{!! Form::close() !!}
@endsection