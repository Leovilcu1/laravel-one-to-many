@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
          @include('partials.success')
            <h1>
                AGGIUNGI CATEGORIA
            </h1>
            <div>
                <a href="{{ route("admin.categories.create") }}" class="btn btn-success">Aggiungi Progetto</a>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">nome</th>
                    <th scope="col">Slug</th>
                    <th scope="col"># progetto</th>
                  </tr>
                </thead>
                @foreach ($categories as $index => $category)
                <tbody>
                  <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->slug }}</td> 
                    <td>{{ $category->posts()->count() }}</td> 
                    <td>
                        <a href="{{ route("admin.categories.show",$category->id) }}" class="btn btn-primary" >Detagli</a>
                        <a href="{{ route("admin.categories.edit",$category->id) }}" class="btn btn-warning" >Aggiorna</a>

                        <form class="d-inline-block" action="{{ route('admin.categories.destroy',$category->id) }}" method="POST" onsubmit="return confirm('sei sicuro di voler eliminare questo categoria')">
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