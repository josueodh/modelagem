@extends('layouts.master')

@section('content')

@component('components.show')
    @slot('title', 'Exibir Departamento')
    @slot('lista')
        <li class="list-group-item">
            <b><i class="fas fa-hashtag"></i> ID</b> <a class="float-right">
                {{$departament->id}}
            </a>
        </li>
        <li class="list-group-item">
            <b><i class="fas fa-hashtag"></i> Descrição</b> <a class="float-right">
                {{$departament->description}}
            </a>
        </li>
    @endslot
@endcomponent

@endsection