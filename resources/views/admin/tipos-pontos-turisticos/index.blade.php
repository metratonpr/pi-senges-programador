@extends('layout.app')

@section('title', 'Tipos de Pontos Turísticos')

@section('conteudo')
    <div class="mt-4 container">
        <!-- Cabeçalho -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary fw-bold">Tipos de Pontos Turísticos</h2>
            <a href="{{ route('admin.tipos-pontos.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Novo
            </a>
        </div>

        <!-- Card com a Tabela -->
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Lista de Tipos de Pontos Turísticos</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col" class="text-start" style="width: 80%;">Tipo</th>
                                <th scope="col" style="width: 20%;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tipoPontoTuristicos as $tipoPontoTuristico)
                                <tr>
                                    <td class="fw-bold text-start">{{ $tipoPontoTuristico->tipo }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.tipos-pontos.show', $tipoPontoTuristico) }}" class="btn btn-sm btn-primary">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.tipos-pontos.edit', $tipoPontoTuristico) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <x-modals.confirm-delete :id="$tipoPontoTuristico->id" routePrefix="admin.tipos-pontos" entity="tipo de ponto turístico" />
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center text-muted py-3">
                                        Nenhum tipo de ponto turístico encontrado.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Paginação -->
        <div class="mt-3">
            {{ $tipoPontoTuristicos->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
