@extends('layout.app')

@section('title', 'Editar Notícia')

@section('conteudo')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Cabeçalho -->
                <h3 class="text-primary fw-bold mb-4">Editando Notícia</h3>

                <!-- Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ route('admin.noticias.update', $noticia) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Data da Notícia -->
                            <x-form.input 
                                type="datetime-local" 
                                name="data" 
                                label="Data da Notícia" 
                                :value="old('data', $noticia->data)" 
                                required 
                            />

                            <!-- Título -->
                            <x-form.input 
                                type="text" 
                                name="titulo" 
                                label="Título da Notícia" 
                                :value="old('titulo', $noticia->titulo)" 
                                required 
                            />

                            <!-- Subtítulo -->
                            <x-form.input 
                                type="text" 
                                name="subtitulo" 
                                label="Subtítulo da Notícia" 
                                :value="old('subtitulo', $noticia->subtitulo)" 
                            />

                            <!-- Texto da Notícia -->
                            <x-form.textarea 
                                name="texto" 
                                label="Texto da Notícia" 
                                required
                            >
                                {{ old('texto', $noticia->texto) }}
                            </x-form.textarea>

                            <!-- Autor -->
                            <x-form.select 
                                name="id_autor" 
                                label="Escolha um Autor" 
                                :options="$autores" 
                                :value="old('id_autor', $noticia->id_autor)" 
                                display="nome" 
                                required 
                            />

                            <!-- Caderno -->
                            <x-form.select 
                                name="id_caderno" 
                                label="Escolha um Caderno" 
                                :options="$cadernos" 
                                :value="old('id_caderno', $noticia->id_caderno)" 
                                display="nome" 
                                required 
                            />

                            <!-- Botão de Enviar -->
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
