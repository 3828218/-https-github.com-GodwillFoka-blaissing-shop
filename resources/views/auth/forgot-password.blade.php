<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Kollin'Shop | Administration</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ asset('assets/styleAdmin.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/ks3.png') }}">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Bienvenu Sur La Partie D'administration</div>
                                            <span>Vous avez oublié votre mot de passe? Entrez juste votre adreese Email
                                                et nous vous enverons un mail contenant le lien de réinitialisation du
                                                mot de passe et vous allez en crrer un nouveau</span>
                                        </h4>
                                    </div>

                                    @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    <form method="POST" action="{{ route('password.confirm') }}">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="email"
                                                        id="exampleEmail" placeholder="Email" type="email"
                                                        :value="old('email')" required autofocus class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer clearfix">
                                            <div class="float-right">
                                                <button type="submit"
                                                    class="btn btn-primary btn-lg">{{ __('Envoyer le mail') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Fait Par <a style="color: white"
                                href="https:::wa.me/+237691424882"><b>Mc Compagny</b></a> 2022 </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/scriptAdmin.js') }}"></script>
</body>

</html>
