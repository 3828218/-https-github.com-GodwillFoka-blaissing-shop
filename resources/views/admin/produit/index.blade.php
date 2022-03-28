@extends('dashboard')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="metismenu-icon pe-7s-users" width="100%"></i>
                </div>
                <div>Liste des Produits
                </div>
            </div>
            <div class="page-title-actions">
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
            <div class="page-title-actions">
                <a href="{{ url('/admin/produit/create') }}" aria-haspopup="true" aria-expanded="false"
                    class="btn-shadow btn btn-success">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </span>
                    Ajouter
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="row">
                    <div class="table-responsive">
                        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
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
                                        <td class="text-center"><img src="{{ $item->image }}" width="100px;" alt=""></td>
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
                                            <a href="{{ url('/admin/produit/' . $item->id) }}"
                                                title="View Produit"><button class="btn btn-info btn-sm"><i
                                                        class="fa fa-eye" aria-hidden="true"></i>
                                                    View</button></a>
                                            <a href="{{ url('/admin/produit/' . $item->id . '/edit') }}"
                                                title="Edit Produit"><button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/produit' . '/' . $item->id) }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Produit"
                                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $produit->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
