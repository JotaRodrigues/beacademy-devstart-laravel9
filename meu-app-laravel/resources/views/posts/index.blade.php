@extends('template.users')
@section('title', 'Listagem de Usuários')

@section('body')
    <h1 style="text-align: center; margin: 30px 0;">Listagem de Postagens</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuário</th>
                <th scope="col">Título</th>
                <th scope="col">Postagem</th>
                <th scope="col">Data de Cadastro</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->post }}</td>
                    <td>{{ date('d/m/Y - H:i', strtotime($post->created_at)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">
        
    </div>
@endsection