@extends('layouts.master')

@section('content')


@component('components.table')
    @slot('create', route('departaments.create'))
    @slot('titulo', 'Departamentos')


    @slot('head')
        <th>Nome</th>
        <th></th>
    @endslot
    @slot('body')
        @foreach ($departaments as $departament)
            <tr>
                <td>{{ $departament->name }}</td>
                <td class="options">
                    <a href="{{ route('departaments.show', $departament->id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('departaments.edit', $departament->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                    <form class="form-delete" action="{{ route('departaments.destroy', $departament->id) }}" method="post">
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