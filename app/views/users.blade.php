@extends('layout')

@section('content')
    @foreach($users as $user)
        <p>
            <a href="{{ URL::route('profile', $user->_id) }}">
            {{ $user->name }}
            </a>
        </p>
        <p> </p>
    @endforeach
@stop