@extends('layouts.master')

@section('content')

@component('components.edit')
    @slot('title', 'Editar Aviso')
    @slot('url', route('warnings.update', $warning->id))
    @slot('form')
        @include('warnings.form')
    @endslot
@endcomponent

@endsection