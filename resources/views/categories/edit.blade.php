@extends('layouts.master')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Categoria')
    @slot('url', route('categories.update', $category->id))
    @slot('form')
        @include('categories.form')
    @endslot
@endcomponent

@endsection