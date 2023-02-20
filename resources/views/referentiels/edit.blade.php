@extends('referentiels.layout')
@section('content')
<<div class="container">   
<div  class="card-body col-md-8 offset-2" >
    <div class="card col-md-8 offset-2 mt-3">
  <div class="bg-info">
    <h4 class="text-center">Modifier les donnees du referentiel</h4>
  </div>
      <form action="{{ url('referentiel/' .$referentiel->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Libelle</label>
        <input type="text" name="libelle" class="form-control" value="{{$referentiel->libelle}}"required>
        <label>Valider</label>
             <select name="valider" id="" class="form-control" value="{{$referentiel->valider}}" required>
               <option value="">....Chosiser....</option>
                <option value="1">Oui</option>
                <option value="0">Non</option> 
             </select>
        <label>Horaire</label>
        <input type="float" name="horaire" class="form-control" value="{{$referentiel->horaire}}" required>
        <div class="col-md-12 text-center">
        <input type="submit" value="Modifier" class="btn bg-info" class="btn btn-primary btn-lg">
        </div>
    </form>
  </div>
</div>

</div>
@stop
