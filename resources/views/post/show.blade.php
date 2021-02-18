@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <p>
                    Title: {{ $post->title }}
                </p>
                <p>
                    Description: {{ $post->description }}
                </p>

                <div>
                    <a href="{{ route('posts.edit' , $post->id) }}" class="btn btn-success">Edit </a>
                </div>

                <div>
                    <a href="{{ route('posts.index') }}" class="btn btn-success">Back</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
