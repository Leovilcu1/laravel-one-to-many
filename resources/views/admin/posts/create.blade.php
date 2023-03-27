@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1>
                Aggiungi nuovo Progetto
            </h1>
        </div> 
    </div>
    @include('partials.error')
    <div class="row justify-content-center">
        <div class="col">
            <form action="{{ route('admin.posts.store')  }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" value="{{ old('title') }}" class="form-control" id="title" name="title" required maxlength="128" placeholder="inserisci il titolo del progetto">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Contenuto</label>
                    <textarea class="form-control" id="content" rows="10" name="content" required maxlength="4096" placeholder="inserisci il contenuto ">{{ old("content") }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">immagine in evidenza</label>
                    <input type="file"  class="form-control" id="img" name="img" accept="image/*"  placeholder="inserisci l'immagine in evidenza...">
                </div>
                <div> 
                    <button type="submit" class="btn btn-success">AGGIUNGI</button>
                </div>
            </form> 
        </div>
        <a href="{{ route("admin.posts.index") }}" class="btn btn-primary my-4" >Torna indietro</a>
    </div>
</div>   
@endsection