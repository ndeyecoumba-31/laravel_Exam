
@extends('types.layout')
@section('content')
<div class="container">   

<div  class="card-body col-md-8 offset-2" >
    
      <div class="card col-md-8 offset-2 mt-3">
      <div class="bg-info">
        <h5 class="text-center">Formulaire type(s)</h5>
      </div>
      <form action="{{ url('type') }}" method="post">
        {!! csrf_field() !!}
        <div class="card-body">

        <label>Libelle</label>
        <select name="libelle" id="" class="form-control" required>
               <option value="">....Chosiser....</option>
                <option value="metier">metier</option>
                <option value="initiation">initiation</option> 
             </select>
        <input type="submit" value="Enrigistrer" class="btn bg-info offset-5 mt-2"></br>
        </div>
    </form>
    </div>
    </div>
  </div>

  @stop


  
  
