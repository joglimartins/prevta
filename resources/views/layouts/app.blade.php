
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SysLab') }}</title>

    <!-- Icons -->
    <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('css/simple-line-icons.css')}}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{url('css/style.css')}}" rel="stylesheet">
     <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body class="navbar-fixed sidebar-nav fixed-nav">
    <div id="app">
        @include('painel.sidebar')
        <header class="navbar">
            <div class="container-fluid">
                <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">☰</button>
                <a class="navbar-brand" href="#"></a>
                
                <ul class="nav navbar-nav hidden-md-down">
                    <li class="nav-item">
                        <a class="nav-link navbar-toggler layout-toggler" href="#">☰</a>
                    </li>
                @if(true)
                    <li class="nav-item px-1">
                        <a class="nav-link" href="#">Início</a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="#">Usuários</a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="#">Configurações</a>
                    </li>
                @endif
                </ul>

                <ul class="nav navbar-nav float-xs-right hidden-md-down">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-bell"></i><span class="tag tag-pill tag-danger">5</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="{{url('img/avatars/6.jpg')}}" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="hidden-md-down">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">

                            <div class="dropdown-header text-xs-center">
                                <strong>Conta</strong>
                            </div>

                            <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Mensagens<span class="tag tag-success">42</span></a>
                            <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Notas<span class="tag tag-danger">42</span></a>

                            <div class="dropdown-header text-xs-center">
                                <strong>Configurações</strong>
                            </div>

                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Meus dados</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Configurações</a>
                            <div class="divider"></div>
                            <a class="dropdown-item" href="{{ url('/') }}"><i class="fa fa-shield"></i> Bloquear</a>
                            <a class="dropdown-item" href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link aside-toggle" href="#">☰</a>
                    </li>

                </ul>
            </div>
        </header>

        @yield('content')
        @include('painel.asidebar')
    </div>
    <footer class="footer">
        <span class="text-left">
            SysLab 1.0
        </span>
        <span class="float-xs-right">
            Desenvolvido por <a href="http://22lab.com.br">22Lab</a>
        </span>
    </footer>

    <!-- Scripts -->
    <!-- <script src="/js/app.js"></script> -->
<!-- Bootstrap and necessary plugins -->
    <script src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{url('bower_components/tether/dist/js/tether.min.js')}}"></script>
    <script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
    <!-- Plugins and scripts required by all views -->
    <script src="{{url('bower_components/chart.js/dist/Chart.min.js')}}"></script>


    <!-- GenesisUI main scripts -->

    <script src="{{url('js/app.js')}}"></script>





    <!-- Plugins and scripts required by this views -->

    <!-- Custom scripts required by this view -->
    <script src="{{url('js/views/main.js')}}"></script>
</body>

</html>
