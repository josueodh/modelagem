@extends('layouts.app')

@section('title', 'Editar Cargo')

@section('content')

@component('components.edit')
    @slot('url', route('roles.update',$role->id))
    @slot('form')
        @include('roles.form')
    @endslot
@endcomponent

@endsection