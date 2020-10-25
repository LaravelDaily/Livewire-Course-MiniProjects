@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dependent dropdowns') }}</div>

                @livewire('dropdowns')
            </div>
        </div>
    </div>
</div>
@endsection
