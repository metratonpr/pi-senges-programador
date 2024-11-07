<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePontoTuristicoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|min:3|max:255',
            'contato' => 'required|string|min:3|max:255',
            'latitude_longitude' => 'required|string|min:3|max:50',
            'descricao' => 'required|string|min:3',
            'como_chegar' => 'required|string|min:3|max:50',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB máximo
            'id_endereco' => 'required|exists:enderecos,id',
            'id_tipo_ponto_turistico'=> 'required|exists:ponto_turisticos,id'
        ];
    }
}
