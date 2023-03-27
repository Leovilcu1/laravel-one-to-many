@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            @include('partials.success')
            <h1>
                Nome <span class="text-danger">{{ $category->name}}</span>
            </h1>
            <h4>
               Slug :  {{ $category->slug }}
            </h4>
            <h2>Progetti associati ({{ $category->posts()->count() }})</h2>
            @if ($category->posts()->count()>0)
            <ul>
                @foreach ($category->posts as $post) 
                    <li>
                        <a href="{{ route('admin.posts.show', $post->id) }}">
                            {{ $post->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
            @else
                <h3>NESSUN PROGETTO ASSOCIATO</h3>
            @endif 
            
        </div>
        <a href="{{ route("admin.categories.index") }}" class="btn btn-primary" >Torna indietro</a>
    </div>
</div> 
@endsection    