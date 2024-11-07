@extends('layout.app')

@section('title', 'Criar Negócio')

@section('conteudo')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="text-primary fw-bold mb-4">Criar Novo Negócio</h3>

                <!-- Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ route('admin.negocios.store') }}" method="POST">
                            @csrf
                            <x-form.input name="nome_fantasia" label="Nome Fantasia" :value="old('nome_fantasia')" required />
                            <x-form.textarea name="descricao" label="Descrição" :value="old('descricao')" required />
                            <x-form.input name="contato" label="Contato" :value="old('contato')" required />
                            <x-form.input name="latitude_longitude" label="Latitude e Longitude" :value="old('latitude_longitude')" required />
                            <x-form.select name="id_tipo_negocio" label="Tipo de Negócio" :options="$tiposNegocio" :value="old('id_tipo_negocio')" display="tipo" required />
                            <x-form.select name="id_endereco" label="Endereço" :options="$enderecos" :value="old('id_endereco')" display="logradouro" required />
                            <x-form.checkbox 
                                name="ativo" 
                                label="Ativo" 
                                :checked="old('ativo', false)" 
                            />
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
