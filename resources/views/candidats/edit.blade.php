@extends('candidats.layout')
@section('content')
<<div class="container">   
<div  class="card-body col-md-8 offset-2" >
    
    <div class="card col-md-8 offset-2 mt-3">
  <div class="bg-info">
    <h4 class="text-center">Modifier les information du Candidat</h4>
  </div>
      <form action="{{ url('candidat/' .$candidat->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$candidat->id}}" id="id" />
        <label>Nom</label>
        <input type="text" name="nom" class="form-control" value="{{$candidat->nom}}">
        <label>Prenom</label>
        <input type="text" name="prenom" class="form-control" value="{{$candidat->prenom}}">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="{{$candidat->email}}">
        <label>Age</label>
        <input type="text" name="age" class="form-control" value="{{$candidat->age}}">
        <label>NiveauEtude</label>
        <input type="text" name="niveauEtude" class="form-control" value="{{$candidat->niveauEtude}}">
        <label for="">Sexe</label>
           <select name="sexe" id="" class="form-control" value="{{$candidat->sexe}}" required>
            <option value="">..Selectionner le sexe..</option>
             <option value="Homme">Homme</option>
               <option value="Femme">Femme</option> 
            </select>
        <div class="col-md-12 text-center">
        <input type="submit" value="Modifier" class="btn bg-info" class="btn btn-primary btn-lg">
        </div>
    </form>
  </div>
</div>

</div>
@stop
