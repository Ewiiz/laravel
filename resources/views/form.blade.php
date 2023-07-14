@extends('layouts.app')

@section('content')
    <h1>Créer un nouveau POST</h1>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
            <label for="title">Titre</label>
            <input type="text" name="title" class="border-gray-600 boder-2">
            <label for="content">Contenu</label>
            <textarea name="content" cols="30" rows="10" class="border-gray-600 boder-2"></textarea>
        <button type="submit" class="btn bg-red-500">Envoyer</button>
    </form>
@endsection