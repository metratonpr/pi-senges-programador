<!-- Middle Header Area -->
<div class="middle-header mt-4">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <!-- Logo Area -->
            <div class="col-12 col-md-4">
                <div class="logo-area">
                    <a href="/"><img src="{{ asset('img//blog-img//logo.png') }}" alt="logo" /></a>
                </div>
            </div>
            <!-- Header Advert Area -->
            <div class="col-12 col-md-8">
                <div class="header-advert-area">
                    <a href="/"><img src="{{ asset('img//bg-img//top-advert.png') }}" alt="header-add" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bottom Header Area -->
<div class="bottom-header mb-3">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="main-menu">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#gazetteMenu"
                            aria-controls="gazetteMenu" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i> Menu
                        </button>
                        <div class="collapse navbar-collapse" id="gazetteMenu">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Hoje <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Páginas</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/">ÍNICIO</a>
                                        <a class="dropdown-item" href="/site/cadernos">Cadernos</a>
                                        <a class="dropdown-item" href="/site/sobre">Sobre nós</a>
                                        <a class="dropdown-item" href="/site/contato">Contato</a>
                                    </div>
                                </li>
                                @foreach ($cadernosMenu as $caderno)
                                    <li class="nav-item">
                                        <a class="nav-link" href="/site/noticias/categoria/{{ $caderno->id }}">
                                            {{ $caderno->nome }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                            <!-- Search Form -->
                            <div class="header-search-form mr-auto">
                                <form action='/site/noticias/pesquisa' method="POST">
                                    @csrf
                                    <input type="search" placeholder="Digite oque você quer pesquisar aqui..."
                                        id="search" name="search" />
                                    <input class="d-none" type="submit" value="submit" />
                                </form>
                            </div>
                            <!-- Search btn -->
                            <div id="searchbtn">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
