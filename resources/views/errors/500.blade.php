<!-- Herda da superclasse -->
@extends('layout.app')
<!-- Eu posso editar seções -->
@section('title', 'Pagina não encontrada')
<!-- eu quero inserir no conteudo -->
@section('conteudo')
 <!--Insiro o conteudo do meu site -->
 <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 mx-auto">
        <h1>Erro 500 - Erro Interno do Servidor</h1>
        <h3>Entre em contato com o administrador</h3>
    </div>
 </div>
@endsection

