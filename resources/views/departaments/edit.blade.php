@extends('layouts.master')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Departamento')
    @slot('url', route('departaments.update', $departament->id))
    @slot('form')
        @include('departaments.form')
    @endslot
@endcomponent

@endsection