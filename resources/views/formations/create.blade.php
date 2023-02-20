@extends('formations.layout')
@section('content')
<div class="container">   
<div  class="card-body col-md-8 offset-2" >
      <div class="card col-md-8 offset-2 mt-3">
         <div class="bg-info">
        <h5 class="text-center">Formulaire Formation(s)</h5>
      </div>
      <form action="{{ url('formation') }}" method="post">
        {!! csrf_field() !!}
        <div class="card-body">

        <label>Nom</label>
        <input type="text" name="nom" class="form-control" required>
        <label>Duree</label>
        <input type="number" name="duree" class="form-control" required>
        <label>Description</label>
        <input type="text" name="description" class="form-control"required>
        <label for="">isStarted</label>
             <select name="isStarted" id="" class="form-control" required>
               <option value="">....Chosiser....</option>
                <option value="1">Oui</option>
                <option value="0">Non</option> 
             </select>
        <label>Date_Debut</label>
        <input type="date" name="date_debut" class="form-control" required>
        <label for="">Referentiel</label>
         <select name="referentiel_id"  class="form-control">                    
        <option value="">-- Sélectionnez un Referentiel --</option>
         @foreach ($referentiel as $item)
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


  
  
