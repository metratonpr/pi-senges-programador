@extends('layout.app')

@section('title', 'Criar Ponto Turístico')

@section('conteudo')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="text-primary fw-bold mb-4">Criar Novo Ponto Turístico</h3>

                <!-- Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ route('admin.pontos-turisticos.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <x-form.input name="nome" label="Nome" :value="old('nome')" required />
                            <x-form.input name="contato" label="Contato" :value="old('contato')" required />
                            <x-form.input name="latitude_longitude" label="Latitude e Longitude" :value="old('latitude_longitude')" required />
                            <x-form.textarea name="descricao" label="Descrição" :value="old('descricao')" required />
                            <x-form.textarea name="como_chegar" label="Como Chegar" :value="old('como_chegar')" required />
                            <x-form.file name="imagem" label="Imagem" required />
                            <x-form.select name="id_tipo_ponto_turistico" label="Tipo de Ponto Turístico" :options="$tiposPontoTuristico" :value="old('id_tipo_ponto_turistico')" display="tipo" required />
                            <x-form.select name="id_endereco" label="Endereço" :options="$enderecos" :value="old('id_endereco')" display="logradouro" required />
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
