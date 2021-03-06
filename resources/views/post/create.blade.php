@extends('layout.master')

@section('content')
<header class="masthead" style="background-image: url('{{asset('img/about-bg.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-10 mx-auto">
          <div class="page-heading">
            <div class="card">
                <div class="card-header" style="color: black;">Create Post</div>

                <div class="card-body" style="color: black;">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{ route('posts.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>


                        <div class="form-group">
                            <label for="post">Post</label>
                            <TEXTAREA type="text" class="form-control" name="post" rows="10"></TEXTAREA> 
                        </div>
                        <button type="submit" class="btn btn-primary" style="border-radius: 45px 45px 45px 45px;" >Create</button>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

@endsection
