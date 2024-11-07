@extends('layout.app')

@section('title', $noticia->titulo)

@section('conteudo')
    <div class="container mt-4">
        <!-- Cabeçalho -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary fw-bold">Detalhes da Notícia</h2>
            <a href="{{ route('admin.noticias.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>

        <!-- Card de Detalhes -->
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h3 class="fw-bold text-primary mb-3">{{ $noticia->titulo }}</h3>
                @if($noticia->subtitulo)
                    <h5 class="fw-light text-secondary">{{ $noticia->subtitulo }}</h5>
                @endif
                <p class="text-muted">Publicado em: {{ \Carbon\Carbon::parse($noticia->data)->format('d/m/Y H:i') }}</p>
                <hr>

                <!-- Texto -->
                <p class="fs-5 mb-4">{{ $noticia->texto }}</p>

                <!-- Autor e Caderno -->
                <div class="d-flex justify-content-between">
                    <p class="mb-0"><strong>Autor:</strong> {{ $noticia->autor->nome }}</p>
                    <p class="mb-0"><strong>Caderno:</strong> {{ $noticia->caderno->nome }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
