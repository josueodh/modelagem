@extends('layouts.master')

@section('content')

@component('components.show')
    @slot('title', $role->name)
    @slot('list')
        @include('roles.list')
    @endslot
    @slot('delete',route('roles.destroy',$role->id))    
    @slot('edit',route('roles.edit',$role->id))    
@endcomponent

@endsection

@push('scripts')
<script src="{{ asset('js/components/sweetAlert.js') }}"></script>
    
@endpush