<!DOCTYPE html>
<html lang="fr">

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

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/ks3.png') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('Admin/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo text-center">
            <img class="img-circle" src="{{ asset('assets/images/ks3.png') }}" alt=""><br><b>KOLLIN'SHOP</b>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg ">
                <div class="text-center">
                    <h3>Bienvenu Sur La Partie D'administration</h3>
                    Merci d'être enregistré. Avant de continuer, pouvez-vous vérifier votre addresse mail en cliquant
                    juste le lien qui vous a été envoyé par mail, si vous n'avez pas reçu, nous vous renverons un autre.
                </div>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        Nous vous avons envoyé un nouveau mail de vérification
                    </div>
                @endif
                <div class="row">
                    <form method="POST" action="{{ route('verification.send') }}">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg">Continuer</button>
                        </div>
                    </form>
                    <!-- /.col -->
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg">Se déconnecter</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <div class="text-center text-primary opacity-8 mt-3">Fait Par <a style="color: white"
            href="https:::wa.me/+237691424882"><b class="text-success">Mc Compagny</b></a> 2022 </div>
    <!-- jQuery -->
    <script src="{{ asset('Admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('Admin/dist/js/adminlte.min.js') }}"></script>

</body>

</html>
