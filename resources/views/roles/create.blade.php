    
@extends('layouts.app')

@section('title', 'Cadastrar novo cargo')

@section('content')

@component('components.create')
    @slot('url', route('roles.store'))
    @slot('form')
        @include('roles.form')
    @endslot
@endcomponent


@endsection