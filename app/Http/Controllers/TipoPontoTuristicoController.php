<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipoPontoTuristicoRequest;
use App\Http\Requests\UpdateTipoPontoTuristicoRequest;
use App\Models\TipoPontoTuristico;

class TipoPontoTuristicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tipoPontoTuristicos = TipoPontoTuristico::paginate(25);
        return view('admin.tipos-pontos-turisticos.index', compact('tipoPontoTuristicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.tipos-pontos-turisticos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipoPontoTuristicoRequest $request)
    {
        //
        TipoPontoTuristico::create($request->all());

        return redirect()->away('/admin/tipos-pontos')
                ->with('success', 'Tipo Ponto Turistico criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $tipoPontoTuristico = TipoPontoTuristico::find($id);
        return view('admin.tipos-pontos-turisticos.show', compact('tipoPontoTuristico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
         $tipoPontoTuristico = TipoPontoTuristico::find($id);
        return view('admin.tipos-pontos-turisticos.edit', compact('tipoPontoTuristico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipoPontoTuristicoRequest $request, $id)
    {
        //
         $tipoPontoTuristico = TipoPontoTuristico::find($id);
        $tipoPontoTuristico->update($request->all());

        return redirect()->away('/admin/tipos-pontos')
        ->with('success', 'Tipo Ponto Turistico atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
         $tipoPontoTuristico = TipoPontoTuristico::find($id);
        if ($tipoPontoTuristico->pontosturisticos()->count() > 0) {
            return redirect()->away('/admin/tipos-pontos')
                ->with('error', 'Tipo Ponto Turistico possui dependentes!');
        }

        $tipoPontoTuristico->delete();
        return redirect()->away('/admin/tipos-pontos')
            ->with('success', 'Tipo Ponto Turistico removido com sucesso!');
    }
    
}
