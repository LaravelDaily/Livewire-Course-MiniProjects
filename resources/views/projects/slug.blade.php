@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Slug') }}</div>

                @livewire('slug')
            </div>
        </div>
    </div>
</div>
@endsection
