@extends('layouts.master')

@section('content')


@component('components.table')
    @slot('create', route('users.create'))
    @slot('titulo', 'Usuários')


    @slot('head')
        <th>Nome</th>
        <th>E-mail</th>
        <th></th>
    @endslot
    @slot('body')
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="options">
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form class="form-delete" action="{{ route('users.destroy', $user->id) }}" method="post">
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