@extends('layouts.master')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Evento')
    @slot('url', route('events.update', $event->id))
    @slot('form')
        @include('events.form')
    @endslot
@endcomponent

@endsection