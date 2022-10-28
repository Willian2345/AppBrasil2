
<?php

use App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Caminhaos extends Model
{
    use HasFactory;
    protected $fillable = [
    'nome','datadenascimento','posicao','pe','altura','peso'
    ];
      
    
}