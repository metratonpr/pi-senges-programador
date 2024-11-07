@extends('layout.app')

@section('title', 'Negócios')

@section('conteudo')
    <div class="mt-4 container">
        <!-- Cabeçalho -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary fw-bold">Negócios</h2>
            <a href="{{ route('admin.negocios.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Novo
            </a>
        </div>

        <!-- Card com a Tabela -->
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Lista de Negócios</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col" class="text-start" style="width: 25%;">Nome Fantasia</th>
                                <th scope="col" style="width: 25%;">Tipo de Negócio</th>
                                <th scope="col" style="width: 25%;">Ativo</th>
                                <th scope="col" style="width: 25%;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($negocios as $negocio)
                                <tr>
                                    <td class="fw-bold text-start">{{ $negocio->nome_fantasia }}</td>
                                    <td class="text-center">{{ $negocio->tipoNegocio->tipo }}</td>
                                    <td class="text-center">
                                        {{ $negocio->ativo ? 'Sim' : 'Não' }}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.negocios.show', $negocio) }}" class="btn btn-sm btn-primary">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.negocios.edit', $negocio) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <x-modals.confirm-delete :id="$negocio->id" routePrefix="admin.negocios" entity="negócio" />
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-3">
                                        Nenhum negócio encontrado.
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
            {{ $negocios->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
