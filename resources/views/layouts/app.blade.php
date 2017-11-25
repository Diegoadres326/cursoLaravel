<!DOCTYPE html>
<html>
    <head>
        <title>@yield('titulo')</title>
       <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    </head>
    <body>
    	@if($errors->any())
    		@foreach($errors as $error)
    			<div  class="alert alert-danger">
    					<strong>{{ $error }} </strong>
    			</div>
    		@endforeach
    	@endif
    	@if(session('success'))
    			<div class='alert alert-success' >
    					<strong>{{session('success')}} </strong>
    			</div>
    	@endif

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>