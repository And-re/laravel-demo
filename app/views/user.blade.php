@extends('layout')

@section('content')
    <p>
      <a href="{{ URL::route('users') }}">&laquo; Back to Team page</a>
    </p>

    <img class="avatar img-thumbnail" src="{{asset('avatars')}}/{{ (isset($user->avatar)) ? $user->avatar : 'avatar.png' }}" alt="{{ $user->name }}" />

    <h1>{{ $user->name }}</h1>
    @if (isset($user->position))
	    <p>
	        {{ $user->position }}
	    </p>
    @endif
    @if (isset($user->desc))
	    <p class="desc">
	        {{ $user->desc }}
	    </p>
    @endif
	@if (isset($user->links))
		<p>
			<ul>
			@foreach($user->links as $link)
				<li><a href="{{ $link }}" target="_blank">{{ $link }}</a></li>
			@endforeach
			</ul>
		</p>
	@endif
@stop