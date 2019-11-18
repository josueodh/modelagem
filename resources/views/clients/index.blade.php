@extends('layouts.master')

@section('content')


@component('components.table')
    @slot('create', route('clients.create'))
    @slot('titulo', 'Clientes')


    @slot('head')
        <th>Nome</th>
        <th>Telefone</th>
        <th>Status</th>
        <th></th>
    @endslot
    @slot('body')
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->cellphone }}</td>
                <td>{{ $client->status }}</td>
                <td class="options">
                    <a href="{{ route('clients.show', $client->id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form class="form-delete" action="{{ route('clients.destroy', $client->id) }}" method="post">
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