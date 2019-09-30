@extends('layouts.master')

@section('content')

@component('components.create')
    @slot('title', 'Criar Categoria')
    @slot('url', route('categories.store'))
    @slot('form')
        @include('categories.form')
    @endslot
@endcomponent

@endsection