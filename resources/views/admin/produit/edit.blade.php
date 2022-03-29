@extends('dashboard')

@section('content')
    <div class="card">
        <div class="card-header row">
            <div class="col-md-6">
                <h5 class="">
                    Edit Produit #{{ $produit->id }}
                </h5>
            </div>
            <div class="col-md-6">
                <a href="{{ url('/admin/produit') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                            class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
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

                <form method="POST" action="{{ url('/admin/produit/' . $produit->id) }}" accept-charset="UTF-8"
                    class=" col-12  form-horizontal" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    @include('admin.produit.form', ['formMode' => 'edit'])

                </form>
            </div>
        </div>
    </div>
@endsection
