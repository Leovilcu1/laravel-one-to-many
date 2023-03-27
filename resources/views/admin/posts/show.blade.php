@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            @include('partials.success')
            <h1>
                Progetto : <span class="text-danger">{{ $post->title }}</span>
            </h1>
            <h4>
                {{ $post->slug }}
            </h4>
            <p>{{ $post->content }}</p>
            @if ($post->img)
                <div class="my-4">
                    <img  class="w-100 " src="{{ asset('storage/'.$post->img) }}" alt="">
                </div>
            @endif
            
        </div>
        <a href="{{ route("admin.posts.index",$post->id) }}" class="btn btn-primary" >Torna indietro</a>
    </div>
</div>
@endsection    