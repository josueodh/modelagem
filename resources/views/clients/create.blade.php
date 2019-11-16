@extends('layouts.master')

@section('content')

@component('components.create')
    @slot('title', 'Cadastrar Cliente')
    @slot('url', route('clients.store'))
    @slot('form')
        @include('clients.form')
    @endslot
@endcomponent

@endsection