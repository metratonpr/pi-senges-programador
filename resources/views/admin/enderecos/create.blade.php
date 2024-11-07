@extends('layout.app')

@section('title', 'Criar Endereço')

@section('conteudo')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h3 class="text-primary fw-bold mb-4">Criar Novo Endereço</h3>

                <!-- Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ route('admin.enderecos.store') }}" method="POST">
                            @csrf
                            <x-form.input name="logradouro" label="Logradouro" :value="old('logradouro')" required />
                            <x-form.input name="cep" label="CEP" :value="old('cep')" required />
                            <x-form.select name="id_cidade" label="Cidade" :options="$cidades" :value="old('id_cidade')" display="nome" required />
                            <div class="text-end mt-3">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-save"></i> Salvar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
