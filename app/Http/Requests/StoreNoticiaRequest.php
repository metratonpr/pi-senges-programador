<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNoticiaRequest extends FormRequest
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
            //
            'data' => 'required|date',            
            'titulo' =>'required|string|max:255',
            'subtitulo'=>'required|string|max:255',
            'texto' => 'required|string',
            'id_autor' =>'required|exists:autores,id',
            'id_caderno'=>'required|exists:cadernos,id'
        ];
    }
}
