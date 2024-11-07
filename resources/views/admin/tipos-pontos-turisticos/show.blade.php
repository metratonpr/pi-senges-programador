@extends('layout.app')

@section('title', $tipoPontoTuristico->tipo)

@section('conteudo')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-primary fw-bold">{{ $tipoPontoTuristico->tipo }}</h3>
            <a href="{{ route('admin.tipos-pontos.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>

        <!-- Card de Detalhes -->
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <p class="fs-5"><strong>Tipo de Ponto Turístico:</strong> {{ $tipoPontoTuristico->tipo }}</p>
                <p class="text-muted">Criado em: {{ $tipoPontoTuristico->created_at->format('d/m/Y H:i') }}</p>
                <p class="text-muted">Atualizado em: {{ $tipoPontoTuristico->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>
@endsection
