@extends('dashboard')

@section('content')
    <div class="card">
        <div class="card-header row">
            <div class="col-12">
                <h5 class="">
                    Ajouter Un Nouvel Utilisateur
                </h5>
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

                <form method="POST" action="{{ url('/admin/user') }}" accept-charset="UTF-8" class="col-12 form-horizontal"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                    @include('admin.user.form', ['formMode' => 'Ajouter'])

                </form>
            </div>
        </div>
    </div>
@endsection
