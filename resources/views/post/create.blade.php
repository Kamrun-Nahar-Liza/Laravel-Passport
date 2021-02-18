@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}

                <form action="{{ route('posts.store')}}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                
                    @if ($errors->any())
                    <div class="alert alert-danger">
                            @if($errors->count() == 1)
                              {{ $errors->first() }}
                            @else
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach  
                            
                        </ul>
                        @endif
                    </div>
                @endif
                
                @if(session()->has('message'))
                 <div class="alert alert-success">
                    {{ session('message')}}
                 </div>
                @endif
                
                
                  
                  <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" name="title"  value="{{ old('title')}}">
                  </div>
                
                  <div class="form-group">
                    <label for="name">Description</label>
                    <input type="text" class="form-control" name="description"  value="{{ old('description')}}">
                  </div>
                  
                  
                  <button type="submit" class="btn btn-success">Post</button>
                    </form>
                
                  <hr>
                  <p>
                      <a href="{{ route('posts.index')}}" class="btn btn-primary">
                        Back
                      </a>
                    </p>

            </div>
        </div>
    </div>
</div>
@endsection
