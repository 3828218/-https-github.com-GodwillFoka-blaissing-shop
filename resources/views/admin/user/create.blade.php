@extends('dashboard')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="metismenu-icon pe-7s-id" width="100%"></i>
                </div>
                <div>Ajouter Un Nouvel Utilisateur
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <form method="POST" action="{{ url('/admin/user') }}" accept-charset="UTF-8"
                                class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                @include('admin.user.form', ['formMode' => 'Ajouter'])

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
