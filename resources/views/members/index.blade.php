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
                    <a href="{{route('members.create') }}" class="btn btn-default pull-right botao_titulo">
                        Criar Membros
                    </a>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Cargo</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>

                </thead>
                <tbody>
                    @forelse ($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->role_id['name'] }}</td>
                            <td>{{ $member->email }}</td>
                            <td>
                                <a href="{{ route('members.show',$member->id) }}" class="btn btn-primary btn-sm">
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{{ route('members.edit',$member->id) }}" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" onclick="displayAlert({{ $member->id }})" class="btn btn-danger btn-sm">
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
