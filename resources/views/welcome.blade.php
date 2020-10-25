@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Choose the demo') }}</div>
                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="{{ route('dropdowns') }}">Dependent dropdowns</a>
                            </li>
                            <li>
                                <a href="{{ route('dropdowns') }}">Dependent dropdowns</a>
                            </li>
                            <li>
                                <a href="{{ route('dropdowns') }}">Dependent dropdowns</a>
                            </li>
                            <li>
                                <a href="{{ route('dropdowns') }}">Dependent dropdowns</a>
                            </li>
                            <li>
                                <a href="{{ route('dropdowns') }}">Dependent dropdowns</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
