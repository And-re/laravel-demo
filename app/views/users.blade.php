@extends('layout')

@section('content')

    @if (count($users))

        @foreach ($users as $user)
            <li {{ (isset($user->active)) ? ' class="not-active"' : '' }}>
                <img class="avatar" src="avatars/{{ (isset($user->avatar)) ? $user->avatar : 'avatar.png' }}" alt="{{ $user->name }}" />
                <a href="{{ URL::route('profile', $user->_id) }}">
                {{ $user->name }}<br />
                {{{ (isset($user->position)) ? $user->position : '' }}}
                </a>
            </li>
        @endforeach

    @else
        <p>No users</p>
    @endif
@stop