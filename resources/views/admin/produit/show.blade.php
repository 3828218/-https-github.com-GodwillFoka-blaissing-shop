@extends('dashboard')

@section('content')
    <div class="card">
        <div class="card-header row">
            <div class="col-md-6">
                <h5 class="">
                    <div class="pb-2 card-title card-header">Produit {{ $produit->id }}</div>
                </h5>
            </div>
            <div class="col-md-6">
                <a href="{{ url('/admin/produit') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                            class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                <a href="{{ url('/admin/produit/' . $produit->id . '/edit') }}" title="Edit Produit"><button
                        class="btn btn-primary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i>
                        Edit</button></a>

                <form method="POST" action="{{ url('admin/produit' . '/' . $produit->id) }}" accept-charset="UTF-8"
                    style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Produit"
                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash"
                            aria-hidden="true"></i> Delete</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="table-responsive">
                    <div class="card-body">
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
@endsection
