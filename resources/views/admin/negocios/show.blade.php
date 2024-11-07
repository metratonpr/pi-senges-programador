@extends('layout.app')

@section('title', $negocio->nome_fantasia)

@section('conteudo')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-primary fw-bold">{{ $negocio->nome_fantasia }}</h3>
            <a href="{{ route('admin.negocios.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>

        <!-- Card de Detalhes -->
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <p class="fs-5"><strong>Nome Fantasia:</strong> {{ $negocio->nome_fantasia }}</p>
                <p class="fs-5"><strong>Descrição:</strong> {{ $negocio->descricao }}</p>
                <p class="fs-5"><strong>Contato:</strong> {{ $negocio->contato }}</p>
                <p class="fs-5"><strong>Latitude e Longitude:</strong> {{ $negocio->latitude_longitude }}</p>
                <p class="fs-5"><strong>Tipo de Negócio:</strong> {{ $negocio->tipoNegocio->tipo }}</p>
                <p class="fs-5"><strong>Endereço:</strong> {{ $negocio->endereco->logradouro }}</p>
                <p class="fs-5"><strong>Ativo:</strong> {{ $negocio->ativo ? 'Sim' : 'Não' }}</p>
                <p class="text-muted">Criado em: {{ $negocio->created_at->format('d/m/Y H:i') }}</p>
                <p class="text-muted">Atualizado em: {{ $negocio->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>
@endsection
