@extends('layouts.master')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Perfil do membro</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-outline card-code">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset('img/user.jpg')}}"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{ $user->name }}</h3>

                        <p class="text-muted text-center">{{ $user->role['name'] }}</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Gestões na Code</b> <a class="float-right">2</a>
                            </li>
                            <li class="list-group-item">
                                <b>Nº de Projetos</b> <a class="float-right">0</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-outline card-code">
                    <div class="card-header">
                        <h3 class="card-title">Sobre mim</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> E-mail</strong>

                        <p class="text-muted">
                            {{ $user->email }}
                        </p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Projetos</strong>
                        @foreach ($user->project as $project)
                            <p class="text-muted">{{ $project->name }}</p>
                        @endforeach


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-outline card-code">
                    <div class="card-header p-2">
                        <h3>Avisos</h3>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                @foreach($warnings as $warning)
                                    <div class="post">
                                        <div class="row">
                                            <div class="user-block col-sm-6">
                                                <img class="img-circle img-bordered-sm" src="{{ asset('img/user.jpg') }}"
                                                    alt="Imagem do responsável pelo aviso">
                                                <span class="username">
                                                    <a href="#">{{ $warning->title}}</a>
                                                    <span href="#" class="float-right btn-tool"></span>
                                                </span>
                                                <span class="description">{{  date('d-m-y', strtotime($warning->created_at)) }}</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>{{ $warning->description }}</p>
                                            </div>
                                            <!-- /.user-block -->
                                        </div>
                                    </div>
                                @endforeach
                                <!-- /.post -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection