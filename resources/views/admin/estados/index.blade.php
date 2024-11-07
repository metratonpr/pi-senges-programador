@extends('layout.app')

@section('title', 'Estados')

@section('conteudo')
    <div class="mt-4 container">
        <!-- Cabeçalho -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary fw-bold">Estados</h2>
            <a href="{{ route('admin.estados.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Novo
            </a>
        </div>

        <!-- Card com a Tabela -->
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Lista de Estados</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col" class="text-start" style="width: 80%;">Sigla</th>
                                <th scope="col" style="width: 20%;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($estados as $estado)
                                <tr>
                                    <td class="fw-bold text-start">{{ $estado->sigla }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.estados.show', $estado) }}" class="btn btn-sm btn-primary">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.estados.edit', $estado) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <x-modals.confirm-delete :id="$estado->id" routePrefix="admin.estados" entity="estado" />
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center text-muted py-3">
                                        Nenhum estado encontrado.
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
            {{ $estados->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
