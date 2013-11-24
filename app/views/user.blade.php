@extends('layout')

@section('content')
    <h2>{{ $user->name }}</h2>
    @if (isset($user->position))
	    <p>
	        {{ $user->position }}
	    </p>
    @endif
    @if (isset($user->desc))
	    <p>
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