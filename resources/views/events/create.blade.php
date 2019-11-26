@extends('layouts.master')

@section('content')

@component('components.create')
    @slot('title', 'Criar Evento')
    @slot('url', route('events.store'))
    @slot('form')
        @include('events.form')
    @endslot
@endcomponent

@endsection