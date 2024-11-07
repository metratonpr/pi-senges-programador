@extends('layout.app')

@section('title', $estado->sigla)

@section('conteudo')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-primary fw-bold">{{ $estado->sigla }}</h3>
            <a href="{{ route('admin.estados.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>

        <!-- Card de Detalhes -->
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <p class="fs-5"><strong>Sigla:</strong> {{ $estado->sigla }}</p>
                <p class="text-muted">Criado em: {{ $estado->created_at->format('d/m/Y H:i') }}</p>
                <p class="text-muted">Atualizado em: {{ $estado->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>
@endsection
