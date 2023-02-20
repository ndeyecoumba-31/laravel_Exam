@extends('formations.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-9 offset-2 mt-3">
                <div class="card">
                <div class="bg-info">
            <h4 class="text-center">Liste des formation ajouter</h4>
        </div>
                    <div class="card-body">
                        <a href="{{ url('/formation/create') }}" class="btn bg-info btn-sm" title="Add New formation">
                            <i class="fa fa-plus" aria-hidden="true"></i>Referentiel📝
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Duree</th>
                                        <th>Description</th>
                                        <th>isStarted</th>
                                        <th>Date_debut</th>
                                        <th>Referentiel</th>
                                        <th>Actions</th>
                                        <th></th>
                  

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($formation as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->duree }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->isStarted }}</td>
                                        <td>{{ $item->date_debut}}</td>
                                        <td>{{ $item->referentiel->libelle}}</td>
                                        <td>
                                      
                                            <a href="{{ url('/formation/' . $item->id . '/edit') }}" title="Modifier"><button class="btn bg-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>🖋</button></a>
                                            <form method="POST" action="{{ url('/formation' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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


