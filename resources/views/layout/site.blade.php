<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Descrição da página" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Title -->
    <title>Sengés | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}" />

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/core-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    <!-- Responsive CSS -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

    <!-- Optional Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
</head>

<body>
    <div class="container-fluid">
        <!-- Header Area Start -->
        <header class="header-area mb-5">
            <div class="top-header">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">

                        <!-- Breaking news -->
                        @include('components.breakingnews')


                        <!-- Stock news -->
                        @include('components.stocks')


                        <!-- Navbar -->
                        @include('components.navbar')

                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <main>
            <div class="container main-ajuste">
                @yield('conteudo')
            </div>
        </main>

        <!-- Footer Area -->
        <footer class="mt-4">
            <!-- Conteúdo do footer -->
        </footer>
    </div>

    <!-- JavaScript Files -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>

    <!-- Optional Bootstrap JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
</body>

</html>
