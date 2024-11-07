@extends('layout.app')

@section('title', 'Endereços')

@section('conteudo')
    <div class="mt-4 container">
        <!-- Cabeçalho -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary fw-bold">Endereços</h2>
            <a href="{{ route('admin.enderecos.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Novo
            </a>
        </div>

        <!-- Card com a Tabela -->
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Lista de Endereços</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col" class="text-start" style="width: 40%;">Logradouro</th>
                                <th scope="col" style="width: 20%;">CEP</th>
                                <th scope="col" style="width: 20%;">Cidade</th>
                                <th scope="col" style="width: 20%;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($enderecos as $endereco)
                                <tr>
                                    <td class="fw-bold text-start">{{ $endereco->logradouro }}</td>
                                    <td class="text-center">{{ $endereco->cep }}</td>
                                    <td class="text-center">{{ $endereco->cidade->nome }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.enderecos.show', $endereco) }}" class="btn btn-sm btn-primary">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.enderecos.edit', $endereco) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <x-modals.confirm-delete :id="$endereco->id" routePrefix="admin.enderecos" entity="endereço" />
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-3">
                                        Nenhum endereço encontrado.
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
            {{ $enderecos->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
