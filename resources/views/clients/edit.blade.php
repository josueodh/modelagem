@extends('layouts.master')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Cliente')
    @slot('url', route('clients.update', $client->id))
    @slot('form')
        @include('clients.form')
    @endslot
@endcomponent

@endsection