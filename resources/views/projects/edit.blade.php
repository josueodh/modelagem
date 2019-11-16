@extends('layouts.master')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Projeto')
    @slot('url', route('projects.update', $project->id))
    @slot('form')
        @include('projects.form')
    @endslot
@endcomponent

@endsection