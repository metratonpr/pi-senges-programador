<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipoNegocioRequest;
use App\Http\Requests\UpdateTipoNegocioRequest;
use App\Models\TipoNegocio;

class TipoNegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tipoNegocios = TipoNegocio::paginate(25);
        return view('admin.tipos-negocios.index', compact('tipoNegocios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.tipos-negocios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipoNegocioRequest $request)
    {

 
        TipoNegocio::create($request->all());
        return redirect()->away('/admin/tipos-negocios')
            ->with('success', 'Tipo Negocio criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $tipoNegocio = TipoNegocio::find($id);
        return view('admin.tipos-negocios.show', compact('tipoNegocio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
             $tipoNegocio = TipoNegocio::find($id);
        return view('admin.tipos-negocios.edit', compact('tipoNegocio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipoNegocioRequest $request, $id)
    {
        //
             $tipoNegocio = TipoNegocio::find($id);
        $tipoNegocio->update($request->all());
        return redirect()->away('/admin/tipos-negocios')
            ->with('success', 'Tipo Negocio atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
             $tipoNegocio = TipoNegocio::find($id);
        if ($tipoNegocio->negocios()->count() > 0) {
            return redirect()->away('/admin/tipos-negocios')
                ->with('error', 'Tipo Negocio possui dependentes!');
        }

        $tipoNegocio->delete();
        return redirect()->away('/admin/tipos-negocios')
            ->with('success', 'Tipo Negocio removido com sucesso!');
    }
}
