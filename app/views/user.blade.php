@extends('layout')

@section('content')
    <p>{{ $user->name }}</p>
    <p>{{ $user->position }}</p>
    <p>{{ $user->desc }}</p>
@stop