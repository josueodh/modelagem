    
@extends('layouts.app')

@section('title', 'Cadastrar novo membro')

@section('content')

@component('components.create')
    @slot('url', route('members.store'))
    @slot('form')
        @include('members.form')
    @endslot
@endcomponent


@endsection