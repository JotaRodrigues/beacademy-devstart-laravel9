@extends('template.users')
@section('title', 'Novo Usuário')

@section('body')
    <h1 style="text-align: center;">Novo Usuário</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome">
        </div>

        <div style="margin-top: 10px;">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div style="margin-top: 10px;">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div style="margin: 10px 0;">
            <label for="image" class="form-label">Selecione uma imagem</label>
            <input type="file" class="form-control form control-md" id="image" name="image" />
        </div>

        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>
@endsection