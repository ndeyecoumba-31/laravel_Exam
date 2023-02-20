<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Referentiel;
use App\Models\Type;

class ReferentielController extends Controller
{
    public function index()
    {
        $referentiel = Referentiel::all();
        return view ('referentiels.index')->with('referentiel', $referentiel);
    }
    
    public function create()
    {
        $type= Type::all();
        return view('referentiels.create',['type'=>$type]);
      
    }
  
    public function store(Request $request)
    {
        
        $input = $request->all();
        Referentiel::create($input);
         return redirect('referentiel')->with('flash_message', 'referentiel Addedd!'); 

        
    }
    
    public function edit($id)
    {
        $referentiel = Referentiel::find($id);
        return view('referentiels.edit')->with('referentiel', $referentiel);
    }
  
    public function update(Request $request, $id)
    {
        $referentiel = Referentiel::find($id);
        $input = $request->all();
        $referentiel->update($input);
        return redirect('referentiel')->with('flash_message', 'referentiel Updated!');  
    }
  
    public function destroy($id)
    {
        Referentiel::destroy($id);
        return redirect('referentiel')->with('flash_message', 'referentiel deleted!');  
    }
}
