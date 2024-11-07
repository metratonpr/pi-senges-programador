@extends('layout.app')

@section('title', $autor->nome)

@section('conteudo')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-primary fw-bold">{{ $autor->nome }}</h3>
            <a href="{{ route('admin.autores.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>

        <!-- Card de Detalhes -->
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <p class="fs-5"><strong>Nome:</strong> {{ $autor->nome }}</p>
                <p class="fs-5"><strong>Contato:</strong> {{ $autor->contato }}</p>
                <p class="text-muted">Criado em: {{ $autor->created_at->format('d/m/Y H:i') }}</p>
                <p class="text-muted">Atualizado em: {{ $autor->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>
@endsection
