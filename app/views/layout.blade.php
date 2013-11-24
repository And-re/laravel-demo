<html>

<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Laravel Demo</title>
	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('css/main.css')}}
</head>
<body>

	<nav id="navbar-top" class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="navbar-header">
	    <a id="logo" class="navbar-brand" href="{{ URL::route('users') }}">Mawelous</a>
	  </div>
	</nav>

  <div class="container">
    @if(Session::has('message'))
       <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif
  </div>

  <div class="container">
    @yield('content')
  </div>

</body>

</html>