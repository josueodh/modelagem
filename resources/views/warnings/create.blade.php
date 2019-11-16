@extends('layouts.master')

@section('content')

@component('components.create')
    @slot('title', 'Criar Aviso')
    @slot('url', route('warnings.store'))
    @slot('form')
        @include('warnings.form')
    @endslot
@endcomponent

@endsection