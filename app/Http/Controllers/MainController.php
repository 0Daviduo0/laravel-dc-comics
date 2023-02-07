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

    public function personAdd() {

        return view('pages.personAdd');

    }

    public function personToDB(Request $request) {

        $data = $request -> validate([

            'firstName' => 'required|string|alpha:ascii|max:32',
            'lastName' => 'required|string|alpha:ascii|max:32',
            'dateOfBirth' => 'required|date|before:today',
            'heigth' => 'nullable|integer|min:40|max:260',

        ]);

        $person = new Person;

        $person->firstName = $data['firstName'];
        $person->lastName = $data['lastName'];
        $person->dateOfBirth = $data['dateOfBirth'];
        $person->heigth = $data['heigth'];

        $person->save();

        return redirect()->route('homepage', $person);

    }

}
