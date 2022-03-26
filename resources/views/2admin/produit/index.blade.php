@extends('dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header"><div style="margin-right: 30px;">Liste de tous les produits</div>
                        <div class="btn-actions-pane-left">
                            <div role="group" class="btn-group-sm btn-group">
                                <a href="{{ url('/admin/produit/create') }}" class="btn btn-success btn-sm"
                                    title="Add New Produit">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                                </a>
                            </div>
                        </div>
                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">
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
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
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
                                        <td class="text-center">{{ $item->image }}</td>
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
                                        <td class="text-center">{{ $item->cathegorie->nom }}</td>
                                        <td class="text-center">
                                            <a href="{{ url('/admin/produit/' . $item->id) }}"
                                                title="View Produit"><button class="btn btn-info btn-sm"><i
                                                        class="fa fa-eye" aria-hidden="true"></i> View</button></a>
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
