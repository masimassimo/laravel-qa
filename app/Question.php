<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    public function setTitleAttribute($value)
    {
        $this->attributes['title']=$value;
        $this->attributes['slug']=Str::slug($value);
    }
}
