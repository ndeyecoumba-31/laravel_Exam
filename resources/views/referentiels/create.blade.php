
@extends('referentiels.layout')
@section('content')
<div class="container">   

<div  class="card-body col-md-8 offset-2" >
    
      <div class="card col-md-8 offset-2 mt-3">
      <div class="bg-info">
        <h5 class="text-center">Formulaire Referentielle(s)</h5>
      </div>
      <form action="{{ url('referentiel') }}" method="post">
        {!! csrf_field() !!}
        <div class="card-body">

        <label>Libelle</label>
        <input type="text" name="libelle" class="form-control" required>
        <label>Valider</label>
             <select name="valider" id="" class="form-control" required>
               <option value="">....Chosiser....</option>
                <option value="1">Oui</option>
                <option value="0">Non</option> 
             </select>
        <label>Horaire</label>
        <input type="float" name="horaire" class="form-control"required>
        <label for="">Type</label>
         <select name="type_id"  class="form-control">                    
        <option value="">-- Sélectionnez le type --</option>
         @foreach ($type as $item)
        <option value="{{$item->id}}">{{$item->libelle}}
        </option>
        @endforeach
        </select>
        <input type="submit" value="Enrigistrer" class="btn bg-info offset-5 mt-2"></br>
        </div>
    </form>
    </div>
    </div>
  </div>

  @stop


  
  
