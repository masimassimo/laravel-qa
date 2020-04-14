<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3)->create()->each(function($u)
         {
            //abbiamo definito una chiave esterna per cui una domanda deve essere associato ad un utente
            //cosi facendo generiamo un set di domande per ogni utente creato
            $u->questions()->saveMany(
               factory(App\Question::class, rand(1,5))->make()
                //make differisce da create nel fatto che non salva su db 
            );

        });
        
    }
}

