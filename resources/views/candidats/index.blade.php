@extends('candidats.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12 offset-0 mt-3">
                <div class="card">
                <div class="bg-info">
            <h4 class="text-center">Liste des candidat ajouter</h4>
        </div>
                    <div class="card-body">
                        <a href="{{ url('/candidat/create') }}" class="btn bg-info btn-sm" title="Add New Candidat">
                            <i class="fa fa-plus" aria-hidden="true"></i>Ajouter 👨‍🎓
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Email</th>
                                        <th>Age</th>
                                        <th>NiveauEtude</th>
                                        <th>Sexe</th>
                                        <th>Actions</th>
                                        
                                        
                  

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($candidat as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->prenom }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->age }}</td>
                                        <td>{{ $item->niveauEtude}}</td>
                                        <td>{{ $item->sexe }}</td>
                                        
                                        <td>
                                            <a href="{{ url('/candidat/' . $item->id . '/edit') }}" title="Modifier"><button class="btn bg-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 🖋</button></a>
                                            <form method="POST" action="{{ url('/candidat' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                 @csrf
                                                 @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer"><i class="fa fa-trash-o" aria-hidden="true"></i> 🗑</button>
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