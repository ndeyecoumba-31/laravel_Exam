<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidat;
use App\Models\Formation;

class CandidatController extends Controller
{
    public function index()
    {
        
        $candidat = Candidat::all();
        return view ('candidats.index')->with('candidat', $candidat);
        
    }
    
    public function create()
    {
        $formation = Formation::all();
        return view('candidats.create',['formation'=>$formation]);
    }
  
    public function store(Request $request)
    {
        $candidat = Candidat::create($request->all());
         $candidat->formation()->attach($request->input('formation_id'));
        return redirect('candidat')->with('flash_message', 'candidat Addedd!');  
    }
    
    public function edit($id)
    {
        $candidat = Candidat::find($id);
        return view('candidats.edit')->with('candidat', $candidat);
    }
  
    public function update(Request $request, $id)
    {
        $candidat = Candidat::find($id);
        $input = $request->all();
        $candidat->update($input);
        return redirect('candidat')->with('flash_message', 'candidat Updated!');  
    }
  
    public function destroy($id)
    {
        Candidat::destroy($id);
        return redirect('candidat')->with('flash_message', 'candidat deleted!');  
    }
}
