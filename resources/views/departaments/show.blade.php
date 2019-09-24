@extends('layouts.master')

@section('content')

@component('components.show')
    @slot('title', $departament->name)
    @slot('list')
        @include('departaments.list')
    @endslot
    @slot('delete',route('departaments.destroy',$departament->id))    
    @slot('edit',route('departaments.edit',$departament->id))    
@endcomponent

@endsection

@push('scripts')
<script src="{{ asset('js/components/sweetAlert.js') }}"></script>
    
@endpush