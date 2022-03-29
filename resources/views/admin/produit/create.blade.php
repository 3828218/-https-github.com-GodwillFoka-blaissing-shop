@extends('dashboard')

@section('content')
    <div class="card">
        <div class="card-header row">
            <div class="col-md-6">
                <h5 class="">
                    Liste des Produits
                </h5>
            </div>
            <div class="col-md-6">
                <a href="{{ url('/admin/produit/create') }}" aria-haspopup="true" aria-expanded="false"
                    class="btn-shadow btn btn-success">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </span>
                    Ajouter
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form method="POST" action="{{ url('/admin/produit') }}" accept-charset="UTF-8" class=" col-12 form-horizontal"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                    @include('admin.produit.form', ['formMode' => 'create'])

                </form>
            </div>
        </div>
    </div>
@endsection
