<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    //Criação em massa e evita de deixa colocar 
    //dados diferentes no banco
    protected $fillable = ['nome', 'contato'];

    //quando eu alterei o nome do meu banco no migrations
    protected $table = 'autores';

    // explorar relacionametno com o noticias
    public function noticias(){
        return $this->hasMany(Noticia::class);
    }

    // Relacionamentos
    //Pai
    //Filhos
}
