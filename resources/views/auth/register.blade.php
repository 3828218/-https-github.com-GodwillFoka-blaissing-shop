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
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/ks3.png')}}">
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
                                            <span>Remplir le formulaire</span>
                                        </h4>
                                    </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="name"
                                                        id="exampleName" placeholder="Nom Complet" type="name"
                                                        required autofocus class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="email"
                                                        id="exampleEmail" placeholder="Email" type="email"
                                                        required class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="password"
                                                        id="examplePassword" placeholder="Mot De Passe" required
                                                        type="password"
                                                        class="form-control"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="password_confirmation"
                                                        id="examplePasswordConfirmation" placeholder="Confirmation Mot De Passe" required
                                                        type="password"
                                                        class="form-control"></div>
                                            </div>
                                        </div>

                                        <div class="modal-footer clearfix">
                                            @if (Route::has('password.request'))
                                                <div class="float-left"><a href="{{ route('login') }}"
                                                        class="btn-lg btn btn-link">
                                                        {{ __('J\'ai déjà un compte') }}</a></div>
                                            @endif
                                            <div class="float-right">
                                                <button type="submit"
                                                    class="btn btn-primary btn-lg">{{ __('Ceer Un Compte') }}</button>
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
