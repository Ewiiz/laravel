@extends('layouts.app')

@section('content')
    <h1>{{ $post->content }}</h1>
    @forelse ($post->comments as $comment)
        <div class="bg-orange-700">{{ $comment->content }} | Créer le {{ $comment->created_at->format('d/m/y') }}</div>
    @empty
        <span class="bg-orange-700">Aucun Commentaire pour ce post</span>
    @endforelse
@endsection

