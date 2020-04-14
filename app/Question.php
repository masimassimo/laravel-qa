<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // attributi su cui posso avere aggiornamento massivo
    protected $fillable = ['title','body'];

    
    
    // oltre al collegamento user-question sul database bisogna impostare il collegamento sul model
    // definendo la relazione
    public function user() 
    {
        // una domanda appartiene ad un utente 1-n
        return $this->belongsTo(User::class);
    }
}
