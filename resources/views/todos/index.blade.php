@extends('layouts.app')

@section('content')
<button class="uk-button uk-button-default uk-margin" type="button" uk-toggle="target: +">show Video</button>
<video src="todo.mp4" loop muted playsinline uk-video="autoplay: inview" aria-setsize=""></video>
<h1>Todos</h1>
@if(count($todos) >0)
@foreach ($todos as $todo)
<div class="alert alert-primary" role="alert">
<h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a>
<span class="badge badge-danger">
{{$todo->due}}</span></h3>
<a href="/todo/{{$todo->id}}/edit" uk-icon="icon:pencil" class="uk-position-right uk-margin-right uk-margin-top">
</a>
</div>
@endforeach
@endif
@endsection