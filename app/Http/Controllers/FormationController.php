<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Referentiel;

class FormationController extends Controller
{
    public function index()
    {
        $formation = Formation::with('referentiel')->get();
        return view ('formations.index',compact('formation'));
    }
    
    public function create()
    {
        $referentiel = Referentiel::all();
        return view('formations.create',['referentiel'=>$referentiel]);
       
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Formation::create($input);
        return redirect('formation')->with('flash_message', 'formation Addedd!');  
    }
    
    public function edit($id)
    {
        $formation = Formation::find($id);
        return view('formations.edit')->with('formation', $formation);
    }
  
    public function update(Request $request, $id)
    {
        $formation = Formation::find($id);
        $input = $request->all();
        $formation->update($input);
        return redirect('formation')->with('flash_message', 'formation Updated!');  
    }
  
    public function destroy($id)
    {
        Formation::destroy($id);
        return redirect('formation')->with('flash_message', 'formation deleted!');  
    }
}
