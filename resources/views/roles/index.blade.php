@extends('layouts.master')

@section('content')


@component('components.table')
    @slot('create', route('roles.create'))
    @slot('titulo', 'Cargos')


    @slot('head')
        <th>Nome</th>
        <th>Departamento</th>
        <th></th>
    @endslot
    @slot('body')
        @foreach ($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                <td>{{ $role->departament['name'] }}</td>
                <td class="options">
                    <a href="{{ route('roles.show', $role->id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    @can('edit' ,App\Role::class)
                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    @endcan
                    <form class="form-delete" action="{{ route('roles.destroy', $role->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endslot
@endcomponent

@endsection

@push('scripts')
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush