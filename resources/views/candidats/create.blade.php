
@extends('candidats.layout')
@section('content')
<div class="container">  


<div  class="card-body col-md-8 offset-2" >
    
      <div class="card col-md-8 offset-2 mt-3">
      
      <div class="bg-info">
        <h5 class="text-center">Formulaire Candidat(s)</h5>
      </div>
      <form action="{{ url('candidat') }}" method="post">
        
        {!! csrf_field() !!}
        <div class="card-body">

        <label>Nom</label>
        <input type="text" name="nom" class="form-control" required>
        <label>Prenom</label>
        <input type="text" name="prenom" class="form-control" required>
        <label>Email</label>
        <input type="email" name="email" id="" class="form-control"required>
        <label>Age</label>
        <input type="number" name="age" class="form-control" min="15" max="35">
        <label>NiveauEtude</label>
        <input type="text" name="niveauEtude" class="form-control">
        <label for="">Sexe</label>
                 <select name="sexe" id="" class="form-control" required>
                     <option value="">..Selectionner le sexe..</option>
                     <option value="Homme">Homme</option>
                      <option value="Femme">Femme</option> 
                 </select>
          <label for="">Formation</label>
         <select name="formation_id"  class="form-control">                    
        <option value="">-- Sélectionnez la Formation --</option>
         @foreach ($formation as $item)
        <option value="{{$item->id}}">{{$item->nom}}
        </option>
        @endforeach
        </select>
        <input type="submit" value="Valider✔" class="btn bg-info offset-5 mt-2"></br>
        </div>
    </form>
    </div>
    </div>
  </div>

  @stop


  
  
