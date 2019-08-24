<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Sistema Interno Code JR.') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('scripts')
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="overflow-x: hidden;">
            <a href="/" class="brand-link icone-img">
                <span class="fa-stack ml-3">
                    <img src="{{ asset('img/code.png') }}" style="height: 35px; padding-bottom: 5px;">
                </span>
                <span class="brand-text font-weight-light">Code Jr.</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-between">
                    <div class="image icone-img">
                        <span class="fa-stack">
                            <i class="far fa-circle fa-stack-2x"></i>
                            <i class="fas fa-user fa-stack-1x"></i>
                        </span>
                        <a href="#" class="d-inline brand-text pl-0">{{ Auth::user()->name ?? 'Anônimo' }}</a>
                    </div>
                    <div class="info align-self-center">
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="#" onclick="$('#logout-form').submit()" class="d-block"><i class="nav-icon fas fa-power-off"></i></a>
                        </form>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        @include('include.sidebar')
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">
                                @yield('title', 'Título')
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div id="app" class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
            </div>
            <strong>Copyright &copy; {{ date('Y') }} <a href="https://codejr.com.br">Code Jr</a>.</strong> Todos direitos
            reservados.
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>