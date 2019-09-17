@extends('layouts.master')

@section('content')


@component('components.table')
    @slot('create', route('warnings.create'))
    @slot('titulo', 'Usuários')


    @slot('head')
        <th>Título</th>
        <th>Usuário</th>
        <th>Data</th>
        <th></th>
    @endslot
    @slot('body')
        @foreach ($warnings as $warning)
            <tr>
                <td>{{ $warning->tite }}</td>
                <td>{{ $warning->user['name'] }}</td>
                <td>{{ $warning->data }}</td>
                <td class="options">
                    <a href="{{ route('warnings.show', $warning->id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('warnings.edit', $warning->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form class="form-delete" action="{{ route('warnings.destroy', $warning->id) }}" method="post">
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