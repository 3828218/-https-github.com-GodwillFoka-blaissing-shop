@extends('dashboard')

@section('content')
    <div class="card">
        <div class="card-header row">
            <div class="col-md-4">
                <h3 class="card-title">Liste des Produits</h3>
            </div>
            <div class="col-md-4"><a href="{{ url('/admin/produit/create') }}" aria-haspopup="true"
                    aria-expanded="false" class="btn-shadow btn btn-success">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </span>
                    Ajouter
                </a></div>
            <div class="col-md-4">
                <form method="GET" action="{{ url('/admin/produit') }}" accept-charset="UTF-8"
                    class="form-inline my-2 my-lg-0 float-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search..."
                            value="{{ request('search') }}">
                        <span class="input-group-append">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Nom</th>
                        <th class="text-center">Catégorie</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produit as $item)
                        <tr>
                            <td class="text-center text-muted">{{ $loop->iteration }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                                    <img class="taille2" style="border-radius: 80px; border: solid"
                                        src="{{ asset('$item->image') }}" alt="{{ $item->nom }}" width="50px" height="50px"
                                        data-toggle="modal" data-target="#exampleModal" id="myImg" />
                                </button>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">{{ $item->nom }}</div>
                                            <div class="widget-subheading opacity-7">
                                                @if ($item->etat == 'En Stock')
                                                    <div class="badge badge-success text-center">
                                                        {{ $item->etat }}</div>
                                                @elseif ($item->etat == 'Solde')
                                                    <div class="badge badge-warning text-center">
                                                        {{ $item->etat }}</div>
                                                @elseif ($item->etat == 'Stock Epuisé')
                                                    <div class="badge badge-warning text-center">
                                                        {{ $item->etat }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">{{ $item->categorie }}</td>
                            <td class="text-center">
                                <a href="{{ url('/admin/produit/' . $item->id) }}" title="View Produit"><button
                                        class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                        Voir</button></a>
                                <a href="{{ url('/admin/produit/' . $item->id . '/edit') }}" title="Edit Produit"><button
                                        class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                            aria-hidden="true"></i>
                                        Modifier</button></a>

                                <form method="POST" action="{{ url('/admin/produit' . '/' . $item->id) }}"
                                    accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Produit"
                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash"
                                            aria-hidden="true"></i>
                                        Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{ $item->nom }}</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p><img class="taille2" style="width: 90%" src="{{ $item->image }}"
                                                alt="{{ $item->nom }}" data-toggle="modal" data-target="#exampleModal"
                                                id="myImg" /></p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>

                        <div class="modal fade" id="modal-xl">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{ $item->nom }}</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p><img class="taille2" style="width: 95%" src="{{ $item->image }}"
                                                alt="{{ $item->nom }}" data-toggle="modal" data-target="#exampleModal"
                                                id="myImg" /></p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="float-right btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
