<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'profile'; // Define o nome da tabela como "profile"

    #Coisa nova
    protected $primaryKey = 'user_id'; // Define a chave primária como "user_id"
    public $incrementing = false; // Define se a chave primária é incremental (autoincrement) ou não

    protected $guarded = []; // Define os campos que não podem ser atribuídos em massa

    public function user()
    {
        #return $this->belongsTo('App\Models\User');
        #Coisa Nova
        return $this->belongsTo(User::class, 'user_id', 'id'); // Define a relação de pertencimento com o modelo User
    }
}
