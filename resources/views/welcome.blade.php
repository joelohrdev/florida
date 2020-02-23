@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-11">Florida 2020</h1>
                @livewire('post')
            </div>
        </div>
    </div>
@endsection
