@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dettagli Prodotto</h2>
        <div class="card mb-3">
            <div class="card-header">
                {{ $word->title }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $word->slug }}</h5>
                <p class="card-text">{{ $word->content }}</p>
            </div>
            <div class="card-footer">
                <h4>Tags</h4>
                @forelse ($word->tags as $tag)
                    <span class="badge badge-warning">{{ $tag->name }}</span>
                @empty
                    Nessun tag
                @endforelse
            </div>
        </div>
        <a href="{{ route('admin.words.index')}}" class="btn btn-danger">Torna Indietro</a>
    </div>
@endsection