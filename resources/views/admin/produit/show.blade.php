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
                <h5 class="">
                    <div class="pb-2 card-title card-header">Produit {{ $produit->id }}</div></h5>
                <div class="row">
                    <div class="table-responsive">
                        <div class="card-body">

                            <a href="{{ url('/admin/produit') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                                        class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                            <a href="{{ url('/admin/produit/' . $produit->id . '/edit') }}" title="Edit Produit"><button
                                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i>
                                    Edit</button></a>

                            <form method="POST" action="{{ url('admin/produit' . '/' . $produit->id) }}"
                                accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Produit"
                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash"
                                        aria-hidden="true"></i> Delete</button>
                            </form>
                            <br />
                            <br />

                            <div class="table-responsive">
                                <div class="col">
                                    <div class="col-md-6 col-12">
                                        <h3>{{ $produit->nom }} </h3>
                                        <h5>{{ $produit->categorie }}</h5>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <img src="{{ $produit->image }}" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
