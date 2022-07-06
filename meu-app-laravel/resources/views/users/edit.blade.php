@extends('template.users')
@section('title', 'Usuário '. $user->name)

@section('body')
    <h1 style="text-align: center;">Usuário {{ $user->name }}</h1>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @csrf
        <div>
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div style="margin-top: 10px;">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>
        <div style="margin-top: 10px;">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Atualizar</button>
    </form>
@endsection