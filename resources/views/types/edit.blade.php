@extends('types.layout')
@section('content')
<<div class="container">   
<div  class="card-body col-md-8 offset-2" >
    <div class="card col-md-8 offset-2 mt-3">
  <div class="bg-info">
    <h4 class="text-center">Modifier le type</h4>
  </div>
      <form action="{{ url('type/' .$type->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <div class="card-body">

        <label>Libelle</label>
        <input type="text" name="nom" class="form-control"value="{{$type->libelle}}" required>
        <div class="col-md-12 text-center">
        <input type="submit" value="Modifier" class="btn bg-info" class="btn btn-primary btn-lg">
        </div>
    </form>
  </div>
</div>

</div>
@stop
