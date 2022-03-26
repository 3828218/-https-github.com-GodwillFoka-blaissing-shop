@extends('dashboard')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="metismenu-icon pe-7s-users" width="100%"></i>
                </div>
                <div>Liste des Utilisateurs
                </div>
            </div>

            <div class="page-title-actions">
                <a href="{{ url('/admin/user/' . Auth::user()->id . '/edit') }}" aria-haspopup="true" aria-expanded="false"
                    class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="metismenu-icon pe-7s-refresh-2"></i>
                    </span>
                    Modifier Mes Informations
                </a>
            </div>
            <div class="page-title-actions">
                <a href="{{url('admin/user/create')}}" aria-haspopup="true" aria-expanded="false"
                    class="btn-shadow btn btn-success">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="metismenu-icon pe-7s-id"></i>
                    </span>
                    Ajouter
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($users as $item)
            @if ($item->id != Auth::user()->id)
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card-shadow-primary card-border text-white mb-3 card bg-primary">
                        <div class="dropdown-menu-header">
                            <div class="dropdown-menu-header-inner bg-primary">
                                <div class="menu-header-content">
                                    <div class="avatar-icon-wrapper mb-3 avatar-icon-xl">
                                        <div class="avatar-icon">
                                            @if ($item->image)
                                                <img src="{{ $item->image }}" alt="Avatar 5">
                                            @else
                                                <i class="metismenu-icon pe-7s-users" width="100%"></i>
                                            @endif
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="menu-header-title">{{ $item->name }}</h5>
                                        <h6 class="menu-header-subtitle">{{ $item->email }}</h6>
                                        <h6 class="menu-header-subtitle">{{ $item->numero }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center d-block card-footer">
                            <form method="POST" action="{{ url('/admin/user' . '/' . $item->id) }}"
                                accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn-shadow-dark btn-wider btn btn-danger" title="Supprimer Produit"
                                    onclick="return confirm(&quot;Confirm delete?&quot;)">
                                    <i class="metismenu-icon pe-7s-trash"></i> Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card-shadow-primary card-border text-white mb-3 card bg-primary">
                        <div class="dropdown-menu-header">
                            <div class="dropdown-menu-header-inner bg-primary">
                                <div class="menu-header-content">
                                    <div class="avatar-icon-wrapper mb-3 avatar-icon-xl">
                                        <div class="avatar-icon">
                                            @if ($item->image)
                                                <img src="{{ $item->image }}" alt="Avatar 5">
                                            @else
                                                <i class="metismenu-icon pe-7s-users" width="100%"></i>
                                            @endif
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="menu-header-title">Vous</h5>
                                        <h5 class="menu-header-title">{{ $item->name }}</h5>
                                        <h6 class="menu-header-subtitle">{{ $item->email }}</h6>
                                        <h6 class="menu-header-subtitle">{{ $item->numero }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
