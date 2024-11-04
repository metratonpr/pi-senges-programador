@extends('layout.app')
@section('title',$caderno->nome)
@section('conteudo')
<!-- php artisan key:generate -->
<div>
    <h3>Nome: {{$caderno->nome}}.</h3>

</div>
<div>
    <a href="/admin/cadernos"
        class="btn btn-success">Voltar</a>
</div>
@endsection