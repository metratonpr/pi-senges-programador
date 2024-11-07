@extends('layout.app')

@section('title', 'Editar Ponto Turístico')

@section('conteudo')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="text-primary fw-bold mb-4">Editar Ponto Turístico</h3>

                <!-- Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ route('admin.pontos-turisticos.update', $pontoTuristico) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <x-form.input name="nome" label="Nome" :value="old('nome', $pontoTuristico->nome)" required />
                            <x-form.input name="contato" label="Contato" :value="old('contato', $pontoTuristico->contato)" required />
                            <x-form.input name="latitude_longitude" label="Latitude e Longitude" :value="old('latitude_longitude', $pontoTuristico->latitude_longitude)" required />
                            <x-form.textarea name="descricao" label="Descrição" :value="old('descricao', $pontoTuristico->descricao)" required />
                            <x-form.textarea name="como_chegar" label="Como Chegar" :value="old('como_chegar', $pontoTuristico->como_chegar)" required />
                            <x-form.file name="imagem" label="Imagem" />
                            <x-form.select name="id_tipo_ponto_turistico" label="Tipo de Ponto Turístico" :options="$tiposPontoTuristico" :value="old('id_tipo_ponto_turistico', $pontoTuristico->id_tipo_ponto_turistico)" display="tipo" required />
                            <x-form.select name="id_endereco" label="Endereço" :options="$enderecos" :value="old('id_endereco', $pontoTuristico->id_endereco)" display="logradouro" required />
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
