@extends('types.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-6 offset-3 mt-5">
                <div class="card">
                <div class="bg-info">
            <h4 class="text-center">Liste des type ajouter</h4>
        </div>
                    <div class="card-body">
                        <a href="{{ url('/type/create') }}" class="btn bg-info btn-sm" title="Add New type">
                            <i class="fa fa-plus" aria-hidden="true"></i> nouveaux type 📝
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Libelle</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($type as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->libelle }}</td>
                                        <td>
                                            <a href="{{ url('/type/' . $item->id . '/edit') }}" title="Modifier"><button class="btn bg-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  🖋</button></a>
                                            <form method="POST" action="{{ url('/type' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
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