@extends('layouts.master')

@section('content')

@component('components.create')
    @slot('title', 'Criar Usuário')
    @slot('url', route('users.store'))
    @slot('form')
        @include('users.form')
    @endslot
@endcomponent

@endsection