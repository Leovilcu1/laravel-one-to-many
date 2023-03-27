@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
          @include('partials.success')
            <h1>
                TUTTI GLI POSTS
            </h1>
            <div>
                <a href="{{ route("admin.posts.create") }}" class="btn btn-success">Aggiungi Progetto</a>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                @foreach ($posts as $index => $post)
                <tbody>
                  <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td> 
                    <td>
                        <a href="{{ route("admin.posts.show",$post->id) }}" class="btn btn-primary" >Detagli</a>
                        <a href="{{ route("admin.posts.edit",$post->id) }}" class="btn btn-warning" >Aggiorna</a>

                        <form class="d-inline-block" action="{{ route('admin.posts.destroy',$post->id) }}" method="POST" onsubmit="return confirm('sei sicuro di voler eliminare questo post')">
                          @csrf
                          @method("DELETE")
                          <button class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
        </div>
    </div>

    
</div>
@endsection