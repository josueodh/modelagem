@extends('layouts.app')

@section('title', 'Lista de Membros')

@section('content')

@if(session('alert'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Opreção concluida com sucesso!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="table-usuario" class="table table-striped">
                <thead>
                    <a href="{{route('roles.create') }}" class="btn btn-default pull-right botao_titulo">
                        Criar Cargo
                    </a>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Ações</th>
                    </tr>

                </thead>
                <tbody>
                    @forelse ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <a href="{{ route('roles.show',$role->id) }}" class="btn btn-primary btn-sm">
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" onclick="displayAlert({{ $role->id }})" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <form name="delete" action="" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
