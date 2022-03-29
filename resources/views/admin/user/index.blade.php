@extends('dashboard')

@section('content')
<div class="card">
    <div class="card-header row">
        <div class="col-md-4">
            <h3 class="card-title">Liste des Utilisateurs</h3>
        </div>
        <div class="col-md-4">
            <a href="{{ url('/admin/user/' . Auth::user()->id . '/edit') }}" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-success">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="fas fa-plus"></i>
                </span>
                Ajouter un Utlisateur
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ url('/admin/user/' . Auth::user()->id . '/edit') }}" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="fas fa-user"></i>
                </span>
                Modifier Mes Informations
            </a>
        </div>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row d-flex align-items-stretch">
                    @foreach ($users as $item)
                    @if ($item->id != Auth::user()->id)
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                                {{ $item->name }}
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-enveloppe"></i></span> Address:
                                                {{ $item->email }}
                                            </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #:
                                                {{ $item->numero }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ $item->image }}" alt="{{ $item->name }}" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <form method="POST" action="{{ url('/admin/user' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn-shadow-dark btn-wider btn btn-danger" title="Supprimer Produit" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                            <i class="metismenu-icon pe-7s-trash"></i> Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                                Vous
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-enveloppe"></i></span> Address:
                                                {{ $item->email }}
                                            </li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #:
                                                {{ $item->numero }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ $item->image }}" alt="{{ $item->name }}" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="{{ url('/admin/user/' . Auth::user()->id . '/edit') }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> Modifier mon profil
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
