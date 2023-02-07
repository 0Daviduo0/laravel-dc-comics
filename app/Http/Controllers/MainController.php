<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class MainController extends Controller
{
    //reindirizzamento alla homepage
    public function homepage() {

        //stampare contenuto tabella del db
        $person = Person::all();

        return view('pages.homepage', compact('person')); //ora person si può usare 
                                                          //per fare il ciclo degli oggetti 
                                                          //nella tabella del db e stamparli 
                                                          //in frontend
    }
    
    public function personDelete($id) {

        $people = Person::find($id);
        $people -> delete();

    
        return redirect() -> route('homepage');
    }

}
