@extends('formations.layout')
@section('content')
<<div class="container">   
<div  class="card-body col-md-8 offset-2" >
    <div class="card col-md-8 offset-2 mt-3">
  <div class="bg-info">
    <h4 class="text-center">Modifier les donnees du formation</h4>
  </div>
      <form action="{{ url('formation/' .$formation->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Nom</label>
        <input type="text" name="nom" class="form-control" value="{{$formation->nom}}" required>
        <label>Duree</label>
        <input type="number" name="duree" class="form-control" value="{{$formation->duree}}" required>
        <label>Description</label>
        <input type="text" name="description" class="form-control" value="{{$formation->description}}" required>
        <label for="">isStarted</label>
             <select name="isStarted" id="" class="form-control" value="{{$formation->isStarted}}" required>
               <option value="">....Chosiser....</option>
                <option value="1">Oui</option>
                <option value="0">Non</option> 
             </select>
        <label>Date_Debut</label>
        <input type="date" name="date_debut" class="form-control" value="{{$formation->date_debut}}" required>
        <div class="col-md-12 text-center">
        <input type="submit" value="Modifier" class="btn bg-info" class="btn btn-primary btn-lg">
        </div>
    </form>
  </div>
</div>

</div>
@stop
