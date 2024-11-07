@extends('layout.app')

@section('title', $tipoNegocio->tipo)

@section('conteudo')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-primary fw-bold">{{ $tipoNegocio->tipo }}</h3>
            <a href="{{ route('admin.tipos-negocios.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>

        <!-- Card de Detalhes -->
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <p class="fs-5"><strong>Tipo de Negócio:</strong> {{ $tipoNegocio->tipo }}</p>
                <p class="text-muted">Criado em: {{ $tipoNegocio->created_at->format('d/m/Y H:i') }}</p>
                <p class="text-muted">Atualizado em: {{ $tipoNegocio->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>
@endsection
