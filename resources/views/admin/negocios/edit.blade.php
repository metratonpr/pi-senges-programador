@extends('layout.app')

@section('title', 'Editar Negócio')

@section('conteudo')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="text-primary fw-bold mb-4">Editar Negócio</h3>

                <!-- Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ route('admin.negocios.update', $negocio) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-form.input name="nome_fantasia" label="Nome Fantasia" :value="old('nome_fantasia', $negocio->nome_fantasia)" required />
                            <x-form.textarea name="descricao" label="Descrição" :value="old('descricao', $negocio->descricao)" required />
                            <x-form.input name="contato" label="Contato" :value="old('contato', $negocio->contato)" required />
                            <x-form.input name="latitude_longitude" label="Latitude e Longitude" :value="old('latitude_longitude', $negocio->latitude_longitude)" required />
                            <x-form.select name="id_tipo_negocio" label="Tipo de Negócio" :options="$tiposNegocio" :value="old('id_tipo_negocio', $negocio->id_tipo_negocio)" display="tipo" required />
                            <x-form.select name="id_endereco" label="Endereço" :options="$enderecos" :value="old('id_endereco', $negocio->id_endereco)" display="logradouro" required />
                            <x-form.checkbox 
                                name="ativo" 
                                label="Ativo" 
                                :checked="old('ativo', $negocio->ativo) == true"
                            />
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
