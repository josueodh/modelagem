@extends('layouts.master')

@section('content')

@component('components.show')
    @slot('title', $project->name)
    @slot('list')
        @include('projects.list')
    @endslot
    @slot('delete',route('projects.destroy',$project->id))    
    @slot('edit',route('projects.edit',$project->id))    
@endcomponent

@endsection

@push('scripts')
<script src="{{ asset('js/components/sweetAlert.js') }}"></script>
    
@endpush