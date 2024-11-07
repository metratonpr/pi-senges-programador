@extends('layout.app')

@section('title', 'Cidades')

@section('conteudo')
    <div class="mt-4 container">
        <!-- Cabeçalho -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary fw-bold">Cidades</h2>
            <a href="{{ route('admin.cidades.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Novo
            </a>
        </div>

        <!-- Card com a Tabela -->
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Lista de Cidades</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col" class="text-start" style="width: 40%;">Nome</th>
                                <th scope="col" style="width: 40%;">Estado</th>
                                <th scope="col" style="width: 20%;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cidades as $cidade)
                                <tr>
                                    <td class="fw-bold text-start">{{ $cidade->nome }}</td>
                                    <td class="text-center">{{ $cidade->estado->sigla }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.cidades.show', $cidade) }}" class="btn btn-sm btn-primary">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.cidades.edit', $cidade) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <x-modals.confirm-delete :id="$cidade->id" routePrefix="admin.cidades" entity="cidade" />
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted py-3">
                                        Nenhuma cidade encontrada.
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
            {{ $cidades->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
