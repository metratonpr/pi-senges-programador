@extends('layout.app')

@section('title', 'Notícias')

@section('conteudo')
    <div class="mt-4 container">
        <!-- Cabeçalho -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary fw-bold">Notícias</h2>
            <a href="{{ route('admin.noticias.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Novo
            </a>
        </div>

        <!-- Card com a Tabela -->
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Lista de Notícias</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col" class="text-start" style="width: 40%;">Título</th>
                                <th scope="col" style="width: 20%;">Data</th>
                                <th scope="col" style="width: 20%;">Autor</th>
                                <th scope="col" style="width: 20%;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($noticias as $noticia)
                                <tr>
                                    <td class="fw-bold text-start">{{ e($noticia->titulo) }}</td>
                                    <td class="text-center">{{ \Carbon\Carbon::parse($noticia->data)->format('d/m/Y') }}</td>
                                    <td class="text-center">{{ $noticia->autor->nome }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.noticias.show', $noticia) }}" class="btn btn-sm btn-primary">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.noticias.edit', $noticia) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <x-modals.confirm-delete :id="$noticia->id" routePrefix="admin.noticias" entity="notícia" />
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-3">
                                        Nenhuma notícia encontrada.
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
            {{ $noticias->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
