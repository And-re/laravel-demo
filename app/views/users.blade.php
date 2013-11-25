@extends('layout')

@section('content')

  <h1>Team</h1>

  @if (count($users))
    <ul class="users list-unstyled">
    @foreach ($users as $user)
      <li>
        <a href="{{ URL::route('profile', $user->_id) }}">
          <img class="avatar img-thumbnail" src="{{asset('avatars')}}/{{ (isset($user->avatar)) ? $user->avatar : 'avatar.png' }}" alt="{{ $user->name }}" />
          {{ $user->name }}
        </a> 
        {{{ (isset($user->position)) ? '( '.$user->position.' )' : '' }}}
      </li>
    @endforeach
    </ul>
  @else
    <p>No users</p>
  @endif

  @if (!isset(array_get($users, 'and_re')->_id))
    <a class="btn btn-danger btn-lg" href="{{ URL::route('activate') }}">Add New Team Member</a>
  @endif
@stop