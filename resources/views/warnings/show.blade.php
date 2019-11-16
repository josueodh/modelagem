@extends('layouts.master')

@section('content')

@component('components.show')
    @slot('title', $warning->title)
    @slot('list')
        @include('warnings.list')
    @endslot
    @slot('delete',route('warnings.destroy',$warning->id))    
    @slot('edit',route('warnings.edit',$warning->id))    
@endcomponent

@endsection

@push('scripts')
<script src="{{ asset('js/components/sweetAlert.js') }}"></script>
    
@endpush