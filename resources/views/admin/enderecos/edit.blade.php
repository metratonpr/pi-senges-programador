@extends('layout.app')

@section('title', 'Editar Endereço')

@section('conteudo')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h3 class="text-primary fw-bold mb-4">Editar Endereço</h3>

                <!-- Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ route('admin.enderecos.update', $endereco) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-form.input name="logradouro" label="Logradouro" :value="old('logradouro', $endereco->logradouro)" required />
                            <x-form.input name="cep" label="CEP" :value="old('cep', $endereco->cep)" required />
                            <x-form.select name="id_cidade" label="Cidade" :options="$cidades" :value="old('id_cidade', $endereco->id_cidade)" display="nome" required />
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
