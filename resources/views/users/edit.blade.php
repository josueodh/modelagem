@extends('layouts.master')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Usuário')
    @slot('url', route('users.update', $user->id))
    @slot('form')
        @include('users.form', ['edit' => true])
    @endslot
@endcomponent

@endsection