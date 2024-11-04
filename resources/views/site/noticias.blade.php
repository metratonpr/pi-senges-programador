@extends('layout.site')
@section('conteudo')
    <section class="main-content-wrapper py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 section_padding_100_50">
                    <div class="gazette-heading mb-4">
                        <h4>Notícias do Paraná</h4>
                    </div>
                    @foreach ($noticias as $noticia)
                        <!-- Single Today Post -->
                        <div class="gazette-single-todays-post row align-items-start mb-4">
                            <div class="col-md-4 todays-post-thumb">
                                <img src="https://placehold.co/300x150" alt="" class="img-fluid rounded" />
                            </div>
                            <div class="col-md-8 todays-post-content">
                                <!-- Post Tag -->
                                <div class="gazette-post-tag mb-2">
                                    <a href="#" class="badge bg-primary">{{ $noticia->caderno->nome }}</a>
                                </div>
                                <h3 class="h5">
                                    <a href="#" class="text-dark">{{ $noticia->titulo }}</a>
                                </h3>
                                <span class="text-muted small">{{ $noticia->created_at->format('d/m/Y') }}</span>
                                <p class="mt-2">
                                    {{ $noticia->texto }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
