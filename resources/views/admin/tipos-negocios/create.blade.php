@extends('layout.app')

@section('title', 'Criar Tipo de Negócio')

@section('conteudo')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h3 class="text-primary fw-bold mb-4">Criar Novo Tipo de Negócio</h3>

                <!-- Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ route('admin.tipos-negocios.store') }}" method="POST">
                            @csrf
                            <x-form.input name="tipo" label="Tipo de Negócio" :value="old('tipo')" required />
                            <div class="text-end mt-3">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-save"></i> Salvar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
