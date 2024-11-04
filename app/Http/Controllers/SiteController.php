<?php

namespace App\Http\Controllers;

use App\Models\Caderno;
use App\Models\Noticia;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function admin()
    {

        return view('admin.home');
    }

    public function portal()
    {


        return view('home');
    }

    public function sobre()
    {

        return view('site.sobre');
    }

    public function contato()
    {

        return view('site.contato');
    }

    public function cadernos()
    {

        // ultimas 5 noticias 
        $cadernos = Caderno::all();

        return view('site.cadernos', compact('cadernos'));
    }


    public function noticiasPorCaderno($id)
    {

        $noticias = Noticia::where('caderno_id', $id);

        return view('home', compact('noticias'));
    }

    public function pesquisarNoticias(Request $request)
    {

        $termo = $request->search;
        $noticias = Noticia::where('titulo', 'LIKE', '%' . $termo . '%')->paginate(25);

        return view('site.noticias', compact('noticias'));
    }
}
