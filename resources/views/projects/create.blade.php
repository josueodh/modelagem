@extends('layouts.master')

@section('content')

@component('components.create')
    @slot('title', 'Criar Projeto')
    @slot('url', route('projects.store'))
    @slot('form')
        @include('projects.form')
    @endslot
@endcomponent

@endsection