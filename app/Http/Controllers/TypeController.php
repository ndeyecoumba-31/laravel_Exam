<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function index()
    {
        $type = Type::all();
        return view ('types.index')->with('type', $type);
    }
    
    public function create()
    {
        
        return view('types.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Type::create($input);
        return redirect('type')->with('flash_message', 'type Addedd!');  
    }
    
    public function edit($id)
    {
        $type = Type::find($id);
        return view('types.edit')->with('type', $type);
    }
  
    public function update(Request $request, $id)
    {
        $type = Type::find($id);
        $input = $request->all();
        $type->update($input);
        return redirect('type')->with('flash_message', 'type modifier!');  
    }
  
    public function destroy($id)
    {
        Type::destroy($id);
        return redirect('type')->with('flash_message', 'type supprimer!');  
    }
}
