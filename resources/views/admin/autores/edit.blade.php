@extends('layout.app')

@section('title', 'Editar Autor')

@section('conteudo')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h3 class="text-primary fw-bold mb-4">Editar Autor</h3>

                <!-- Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ route('admin.autores.update', $autor) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-form.input name="nome" label="Nome do Autor" :value="old('nome', $autor->nome)" required />
                            <x-form.input name="contato" label="Contato do Autor" :value="old('contato', $autor->contato)" required />
                            <div class="text-end mt-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save"></i> Atualizar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
