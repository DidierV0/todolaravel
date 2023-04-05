<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    //
    public function index(){

        $todos = Todo::all();

        return view('accueil', compact('todos'));
    }

    // méthode pour enregistrement de mes donné en base
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'task' => 'required'
        ]);
        $todo = new Todo;
        $todo->task = $request-> task;
        $todo->status = 'n';
        $todo->save();

        return redirect('/');
    }

    // methode pour valider une tache
    // a partir de son ID

    public function update($id)
    {
        $todo = Todo::find($id); // recherche de la tache a modifier
        $todo->status = 'o'; // affectation de la modification
        $todo->save(); // enrg de la modification
        return redirect('/'); //redirection 
    }

    public function remove($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/');
    }

}
