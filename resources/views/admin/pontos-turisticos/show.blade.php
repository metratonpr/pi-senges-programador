@extends('layout.app')

@section('title', $pontoTuristico->nome)

@section('conteudo')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-primary fw-bold">{{ $pontoTuristico->nome }}</h3>
            <a href="{{ route('admin.pontos-turisticos.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>

        <!-- Card de Detalhes -->
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <p class="fs-5"><strong>Nome:</strong> {{ $pontoTuristico->nome }}</p>
                <p class="fs-5"><strong>Contato:</strong> {{ $pontoTuristico->contato }}</p>
                <p class="fs-5"><strong>Latitude e Longitude:</strong> {{ $pontoTuristico->latitude_longitude }}</p>
                <p class="fs-5"><strong>Descrição:</strong> {{ $pontoTuristico->descricao }}</p>
                <p class="fs-5"><strong>Como Chegar:</strong> {{ $pontoTuristico->como_chegar }}</p>
                <p class="fs-5"><strong>Imagem:</strong> <img src="{{ asset($pontoTuristico->imagem) }}" alt="Imagem de {{ $pontoTuristico->nome }}" class="img-fluid"></p>
                <p class="fs-5"><strong>Tipo de Ponto Turístico:</strong> {{ $pontoTuristico->tipoPontoTuristico->tipo }}</p>
                <p class="fs-5"><strong>Endereço:</strong> {{ $pontoTuristico->endereco->logradouro }}</p>
                <p class="text-muted">Criado em: {{ $pontoTuristico->created_at->format('d/m/Y H:i') }}</p>
                <p class="text-muted">Atualizado em: {{ $pontoTuristico->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>
@endsection
