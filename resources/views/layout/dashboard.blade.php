<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset ('css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset ('css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset ('css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    <link href="{{ asset ('js/laporan.js') }}" rel="stylesheet" />
</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="orange" data-image="{{ asset ('img/sidebar2.jpg') }}">

            <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <div class="simple-text">
                        Pulo Armyn
                    </div>
                </div>

                <ul class="nav">
                    <li>
                        <a href="{{ url('/') }}">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <p>Beranda</p>
                        </a>
                    </li>
                    <li class="dropdown-btn">
                        <a href="{{ route('laporan.index') }}">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            <p>Laporan</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ispa.index') }}">
                            <i class="fa fa-medkit" aria-hidden="true"></i>
                            <p>ISPA</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('diagnosa.index') }}">
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                            <p>Diagnosa</p>
                        </a>
                    </li>

                </ul>

            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">@yield('judul')</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="">
                                    Log out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())

                        </script> , Pulo Armyn
                    </p>
                </div>
            </footer>

        </div>
    </div>


</body>


<script src="{{ asset ('js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('js/chartist.min.js') }}"></script>
<script src="{{ asset ('js/bootstrap-notify.js') }}"></script>
<script type="text/javascript" src=""></script>
<script src="{{ asset ('js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>
<script src="{{ asset ('js/demo.js') }}"></script>
@yield('script')

</html>
