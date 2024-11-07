<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = ['logradouro',
    'cep','id_cidade'];

    public function cidade(){
        return $this->belongsTo(Cidade::class,'id_cidade');
    }

    public function negocios(){
        return $this->hasMany(Negocio::class,'id_endereco');
    }

    public function pontosTuristicos(){
        return $this->hasMany(PontoTuristico::class,'id_endereco');
    }
}
