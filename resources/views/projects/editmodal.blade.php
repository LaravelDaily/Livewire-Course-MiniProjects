@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit modal form') }}</div>

                @livewire('editmodal')
            </div>
        </div>
    </div>
</div>
@endsection
