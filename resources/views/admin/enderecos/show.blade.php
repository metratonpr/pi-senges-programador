@extends('layout.app')

@section('title', $endereco->logradouro)

@section('conteudo')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-primary fw-bold">{{ $endereco->logradouro }}</h3>
            <a href="{{ route('admin.enderecos.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>

        <!-- Card de Detalhes -->
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <p class="fs-5"><strong>Logradouro:</strong> {{ $endereco->logradouro }}</p>
                <p class="fs-5"><strong>CEP:</strong> {{ $endereco->cep }}</p>
                <p class="fs-5"><strong>Cidade:</strong> {{ $endereco->cidade->nome }}</p>
                <p class="text-muted">Criado em: {{ $endereco->created_at->format('d/m/Y H:i') }}</p>
                <p class="text-muted">Atualizado em: {{ $endereco->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>
@endsection
