@extends('layout.app')
@section('title',$noticia->titulo)
@section('conteudo')
<!-- php artisan key:generate -->
<div>
    <h3>Titulo: {{$noticia->titulo}}.</h3>
    <h2>Subtitulo: {{$noticia->subtitulo}}.</h2>
    <p>Data: {{$noticia->data}}.</p>
    <p>Texto: {{$noticia->texto}}.</p>
    <p>Autor: {{$noticia->autor->nome}}.</p>
    <p>Caderno: {{$noticia->caderno->nome}}.</p>
</div>
<div>
    <a href="/admin/noticias"
        class="btn btn-success">Voltar</a>
</div>
@endsection