@extends('layouts.master')

@section('content')


@component('components.table')
    @slot('create', route('events.create'))
    @slot('titulo', 'Evento')


    @slot('head')
        <th>Nome</th>
        <th>Data</th>
        <th></th>
    @endslot
    @slot('body')
        @foreach ($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ date('d-m-Y', strtotime($event->date)) }}</td>
                <td class="options">
                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                        <form class="form-delete" action="{{ route('events.destroy', $event->id) }}" method="post">
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