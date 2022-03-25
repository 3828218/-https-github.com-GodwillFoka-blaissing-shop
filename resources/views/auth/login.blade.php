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

    <link href="{{ asset('assets/assets/styleAdmin.css') }}" rel="stylesheet">
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
                                            <span>S'il vous plait reseingez vos paramètres de connection</span>
                                        </h4>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="email"
                                                        id="exampleEmail" placeholder="Email" type="email"
                                                        :value="old('email')" required autofocus class="form-control">
                                                </div>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="password"
                                                        id="examplePassword" placeholder="Password" required
                                                        autocomplete="current-password" type="password"
                                                        class="form-control"></div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-check"><input name="remember"
                                                id="remember_me" type="checkbox" class="form-check-input"><label
                                                for="remember_me"
                                                class="form-check-label">{{ __('Me garder connecté') }}</label></div>
                                        <div class="divider"></div>
                                        <h6 class="mb-0">{{ __('Vous n\'avez pas de compte?') }} <a
                                                href="{{ route('register') }}"
                                                class="text-primary">{{ __('Créez un compte') }}</a></h6>
                                        <div class="modal-footer clearfix">
                                            @if (Route::has('password.request'))
                                                <div class="float-left"><a href="{{ route('password.request') }}"
                                                        class="btn-lg btn btn-link">
                                                        {{ __('Mot de passe oublié') }}</a></div>
                                            @endif
                                            <div class="float-right">
                                                <button type="submit"
                                                    class="btn btn-primary btn-lg">{{ __('Se Connecter') }}</button>
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
    <script type="text/javascript" src="{{ asset('assets/assets/scriptAdmin.js') }}"></script>
</body>

</html>
