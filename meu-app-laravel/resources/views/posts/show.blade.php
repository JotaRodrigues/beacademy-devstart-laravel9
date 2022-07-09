@extends('template.users')
@section('title', "Listagem de Postagens do {$user->name}")

@section('body')
    <h1>Postagens do {{ $user->name }}</h1>
    @foreach($posts as $post)
        <div class="mb-3">
            <label class="form-label"><b>Identificação N°:</b><br>{{ $post->id }}</label><br>
            <label class="form-label"><b>Status:</b><br>{{ $post->active?'Ative':'Inativo' }}</label><br>
            <label class="form-label"><b>Título:</b><br>{{ $post->title }}</label><br>
            <label class="forme-label"><b>Postagem:</b><br></label>
            <textarea class="form-control" rows="3">{{ $post->post }}</textarea>
        </div>
    @endforeach
@endsection