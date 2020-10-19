<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Iniciar Sesión | Intersis - Bingo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('template/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('template/css/normalize.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('template/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('template/css/wave/waves.min.css') }}">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('template/css/notika-custom-icon.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('template/css/main.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('template/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('template/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

    
    <div class="login-content">
        <form method="POST" action="#" class="nk-block toggled">
            {{ csrf_field() }}
            <div class="nk-form">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input type="text" name="codigo" class="form-control" value="{{ old('codigo') }}" placeholder="Ingrese el código de su bingo" required autofocus>
                    </div>
                </div>
                <button class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
            </div>

        </form>
    </div>
    <!-- Login Register area End-->
    <!-- jquery
		============================================ -->
    <script src="{{ asset('template/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('template/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('template/js/jquery-price-slider.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('template/js/jquery.scrollUp.min.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('template/js/meanmenu/jquery.meanmenu.js') }}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('template/js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('template/js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('template/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('template/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('template/js/sparkline/sparkline-active.js') }}"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{ asset('template/js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('template/js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('template/js/flot/flot-active.js') }}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{ asset('template/js/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('template/js/knob/jquery.appear.js') }}"></script>
    <script src="{{ asset('template/js/knob/knob-active.js') }}"></script>
    <!--  Chat JS
		============================================ -->
    <script src="{{ asset('template/js/chat/jquery.chat.js') }}"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{ asset('template/js/wave/waves.min.js') }}"></script>
    <script src="{{ asset('template/js/wave/wave-active.js') }}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{ asset('template/js/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('template/js/icheck/icheck-active.js') }}"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{ asset('template/js/todo/jquery.todo.js') }}"></script>
    <!-- Login JS
		============================================ -->
    <script src="{{ asset('template/js/login/login-action.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('template/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('template/js/main.js') }}"></script>
</body>

</html>