<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNegocioRequest extends FormRequest
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
            'nome_fantasia' => 'required|string|min:3|max:255',
            'descricao' => 'required|string|min:3',
            'contato' => 'required|string|min:3|max:255',
            'latitude_longitude' => 'required|string|min:3|max:50',
            'ativo' => 'required|boolean',
            'id_tipo_negocio' => 'required|exists:tipo_negocios,id',
            'id_endereco' => 'required|exists:enderecos,id'
        ];
    }

    protected function prepareForValidation()
{
    $this->merge([
        'ativo' => $this->has('ativo') ? true : false, // Define false se o campo estiver ausente
    ]);
}
}
