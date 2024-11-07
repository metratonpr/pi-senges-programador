@extends('layout.app')

@section('title', 'Tipos de Negócio')

@section('conteudo')
    <div class="mt-4 container">
        <!-- Cabeçalho -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary fw-bold">Tipos de Negócio</h2>
            <a href="{{ route('admin.tipos-negocios.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Novo
            </a>
        </div>

        <!-- Card com a Tabela -->
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Lista de Tipos de Negócio</h5>
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
                            @forelse ($tipoNegocios as $tipoNegocio)
                                <tr>
                                    <td class="fw-bold text-start">{{ $tipoNegocio->tipo }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.tipos-negocios.show', $tipoNegocio) }}" class="btn btn-sm btn-primary">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.tipos-negocios.edit', $tipoNegocio) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <x-modals.confirm-delete :id="$tipoNegocio->id" routePrefix="admin.tipos-negocios" entity="tipo de negócio" />
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center text-muted py-3">
                                        Nenhum tipo de negócio encontrado.
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
            {{ $tipoNegocios->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
