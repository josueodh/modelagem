@extends('layouts.master')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Cargo')
    @slot('url', route('roles.update', $role->id))
    @slot('form')
        @include('roles.form')
    @endslot
@endcomponent

@endsection