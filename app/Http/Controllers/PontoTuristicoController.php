<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePontoTuristicoRequest;
use App\Http\Requests\UpdatePontoTuristicoRequest;
use App\Models\Endereco;
use App\Models\PontoTuristico;
use App\Models\TipoPontoTuristico;
use Illuminate\Support\Facades\Storage;

class PontoTuristicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pontoTuristicos = PontoTuristico::paginate(25);
        return view('admin.pontos-turisticos.index', compact('pontoTuristicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tiposPontoTuristico = TipoPontoTuristico::all();
        $enderecos = Endereco::all();
        return view(
            'admin.pontos-turisticos.create',
            compact('tiposPontoTuristico', 'enderecos')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePontoTuristicoRequest $request)
    {
        //
        $data = $request->validated();

        // Handle image upload
        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->file('imagem')->store('ponto_turisticos', 'public');
        }

        PontoTuristico::create($data);
        return redirect()->away('/admin/pontos-turisticos')
            ->with('success', 'Pontos Turistico criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $pontoTuristico = PontoTuristico::find($id);
        return view(
            'admin.pontos-turisticos.show',
            compact('pontoTuristico')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pontoTuristico = PontoTuristico::find($id);
        $tiposPontoTuristico = TipoPontoTuristico::all();
        $enderecos = Endereco::all();
        return view(
            'admin.pontos-turisticos.edit',
            compact('tiposPontoTuristico', 'enderecos', 'pontoTuristico')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePontoTuristicoRequest $request, $id)
    {
        //
        $pontoTuristico = PontoTuristico::find($id);
        
        $data = $request->validated();

        // Handle image upload
        if ($request->hasFile('imagem')) {
            // Delete old image
            if ($pontoTuristico->imagem) {
                Storage::disk('public')->delete($pontoTuristico->imagem);
            }

            $data['imagem'] = $request->file('imagem')->store('ponto_turisticos', 'public');
        }

        $pontoTuristico->update($data);

        return redirect()->away('/admin/pontos-turisticos')
            ->with('success', 'Pontos Turistico atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $pontoTuristico = PontoTuristico::find($id);
        $pontoTuristico->delete();
        return redirect()->away('/admin/pontos-turisticos')
            ->with('success', 'Pontos Turistico removido com sucesso!');
    }
}
