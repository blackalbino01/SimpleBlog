@extends('layout.master')

@section('content')
<header class="masthead" style="background-image: url('{{asset('img/about-bg.jpg')}}')">
	<div class="overlay"></div>
    <div class="container">
     	<div class="row">
        	<div class="col-lg-8 col-md-10 mx-auto">
          		<div class="site-heading">
            		<h1>Posts</h1>
        		</div>
        	</div>
     	</div>
    </div>
</header>

<div class="container" style="color: black;">
	<div class="row">
		<div class="col-sm-12"> 
			@if(isset($posts))
		    	@foreach($posts as $post)
		    		<h3 style="text-align: center;">{{$post->title}}</h3>
		    		<p>{{$post->post}}</p><br>
		    	@endforeach
		    @else
		    	<p>oops!! There is no post available..</p>
		    @endif
	    </div>
	</div>
</div>
@endsection