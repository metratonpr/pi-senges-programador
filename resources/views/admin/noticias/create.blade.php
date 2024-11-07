@extends('layout.app')

@section('title', 'Criar Notícia')

@section('conteudo')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Cabeçalho -->
                <h3 class="text-primary fw-bold mb-4">Criando Nova Notícia</h3>

                <!-- Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ route('admin.noticias.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Data da Notícia -->
                            <x-form.input type="datetime-local" name="data" label="Data da Notícia" :value="old('data')" required />

                            <!-- Título -->
                            <x-form.input type="text" name="titulo" label="Título da Notícia" :value="old('titulo')" required />

                            <!-- Subtítulo -->
                            <x-form.input type="text" name="subtitulo" label="Subtítulo da Notícia" :value="old('subtitulo')" />

                            <!-- Texto da Notícia -->
                            <x-form.textarea name="texto" label="Texto da Notícia" required>
                                {{ old('texto') }}
                            </x-form.textarea>

                            <!-- Autor -->
                            <x-form.select name="id_autor" label="Escolha um Autor" :options="$autores" :value="old('id_autor')" display="nome" required />

                            <!-- Caderno -->
                            <x-form.select name="id_caderno" label="Escolha um Caderno" :options="$cadernos" :value="old('id_caderno')" display="nome" required />

                            <!-- Botão de Enviar -->
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
