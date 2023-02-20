@extends('referentiels.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-9 offset-2 mt-3">
                <div class="card">
                <div class="bg-info">
            <h4 class="text-center">Liste des referentiel ajouter</h4>
        </div>
                    <div class="card-body">
                        <a href="{{ url('/referentiel/create') }}" class="btn bg-info btn-sm" title="Add New referentiel">
                            <i class="fa fa-plus" aria-hidden="true"></i> nouveaux Referentiel 📝
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Libelle</th>
                                        <th>Valider</th>
                                        <th>Horaire</th>
                                        <th>Type</th>
                                        <th>Actions</th>
                                      
                  

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($referentiel as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->libelle }}</td>
                                        <td>{{ $item->valider }}</td>
                                        <td>{{ $item->horaire }}</td>
                                        <td>{{$item->type->libelle}}</td>
                                        
                                        <td>
                                      
                                            <a href="{{ url('/referentiel/' . $item->id . '/edit') }}" title="Modifier"><button class="btn bg-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  🖋</button></a>
                                            <form method="POST" action="{{ url('/referentiel' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer" ><i class="fa fa-trash-o" aria-hidden="true"></i> 🗑</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection