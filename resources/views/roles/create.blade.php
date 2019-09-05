@extends('layouts.master')

@section('content')

@component('components.create')
    @slot('title', 'Criar Cargo')
    @slot('url', route('roles.store'))
    @slot('form')
        @include('roles.form')
    @endslot
@endcomponent

@endsection