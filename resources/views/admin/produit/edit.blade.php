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
            <div class="card-header">Edit Produit #{{ $produit->id }}</div>
            <div class="card-body">
                <a href="{{ url('/admin/produit') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                            class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                <br />
                <br />

                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form method="POST" action="{{ url('/admin/produit/' . $produit->id) }}" accept-charset="UTF-8"
                    class="form-horizontal" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    @include('admin.produit.form', ['formMode' => 'edit'])

                </form>

            </div>
        </div>
    </div>
@endsection
