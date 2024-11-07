@extends('layout.app')

@section('title', 'Editar Cidade')

@section('conteudo')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h3 class="text-primary fw-bold mb-4">Editar Cidade</h3>

                <!-- Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ route('admin.cidades.update', $cidade) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-form.input name="nome" label="Nome da Cidade" :value="old('nome', $cidade->nome)" required />
                            <x-form.select name="id_estado" label="Estado" :options="$estados" :value="old('id_estado', $cidade->id_estado)" display="sigla" required />
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
