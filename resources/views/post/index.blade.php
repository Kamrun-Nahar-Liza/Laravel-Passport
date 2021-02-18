@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="weLl">
		
                        <p>
                            <a href="{{ route('posts.create')}}" class="btn btn-success">
                                Add  
                            </a>
                            
                        </p>
                        
                
                        @if(session()->has('message'))
                             <div class="alert alert-danger">
                                    {{ session('message')}}
                             </div>
                        @endif
                        
                        <table class="table table-bordered table-condensed">
                            <thead>
                                <tr>
                                
                                <th>Title</th>
                                <th>Description</th>
                                
                                </tr>
                            </thead>
                
                            <tbody>
                
                                @foreach($posts as $post)
                                <tr>
                                    
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->description }}</td>
                                    
                                    <td>
                                        <a href="{{ route('posts.show', $post->id)}}" class="btn btn-info">
                                            <i>Details</i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>


            </div>
        </div>
    </div>
</div>

	

@endsection