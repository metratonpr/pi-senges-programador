@extends('layout.site')
@section('conteudo')
    <section class="main-content-wrapper section_padding_100 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <!-- Gazette Welcome Post -->
                    <div class="gazette-welcome-post">
                        <h2>Cadernos:</h2>
                        <ul>
                            @foreach ($cadernosMenu as $caderno)
                                <li class="">
                                    <a class="" href="/site/noticias/categoria/{{ $caderno->id }}">
                                        {{ $caderno->nome }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
