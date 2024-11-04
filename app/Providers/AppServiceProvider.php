<?php

namespace App\Providers;

use App\Models\Caderno;
use App\Models\Noticia;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        //Estou pedindo todas as categorias
        try {
            $cadernosMenu = Caderno::all();
            view()->share('cadernosMenu', $cadernosMenu);
        } catch (\Exception $e) {
            // Lida com a exceção e pode logar o erro ou realizar outra ação
            \Log::error('Erro ao carregar categorias para o menu: ' . $e->getMessage());

            // Opcional: definir uma variável vazia ou padrão se houver erro
            view()->share('cadernosMenu', collect());
        }
        //Estou pedindo todas as ultimas noticias
        try {
            $ultimasNoticias = Noticia::orderBy('created_at', 'desc')
                ->take(5)
                ->get();
            view()->share('ultimasNoticias', $ultimasNoticias);
            // ultimas 5 noticias 
        } catch (\Exception $e) {
            // Lida com a exceção e pode logar o erro ou realizar outra ação
            \Log::error('Erro ao carregar categorias para o menu: ' . $e->getMessage());

            // Opcional: definir uma variável vazia ou padrão se houver erro
            view()->share('ultimasNoticias', collect());
        }
    }
}
