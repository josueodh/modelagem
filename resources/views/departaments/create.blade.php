@extends('layouts.master')

@section('content')

@component('components.create')
    @slot('title', 'Criar Departamento')
    @slot('url', route('departaments.store'))
    @slot('form')
        @include('departaments.form')
    @endslot
@endcomponent

@endsection