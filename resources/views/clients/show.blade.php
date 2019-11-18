@extends('layouts.master')

@section('content')

@component('components.show')
    @slot('title', $client->name)
    @slot('list')
        @include('clients.list')
    @endslot
    @slot('delete',route('clients.destroy',$client->id))    
    @slot('edit',route('clients.edit',$client->id))    
@endcomponent

@endsection

@push('scripts')
<script src="{{ asset('js/components/sweetAlert.js') }}"></script>
    
@endpush