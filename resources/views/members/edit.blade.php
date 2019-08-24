@extends('layouts.app')

@section('title', 'Editar membro')

@section('content')

@component('components.edit')
    @slot('url', route('members.update',$member->id))
    @slot('form')
        @include('members.form')
    @endslot
@endcomponent

@endsection