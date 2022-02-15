@extends('layouts.main-layout')
@section('content')
    <main id="app">
        <div class="container">
            <div class="row justify-content-center py-3">
                <a href="{{route('create.postcard')}}" class="btn btn-primary">CREATE NEW POSTCARD</a>
            </div>
            <postcards-component></postcards-component>
        </div>
    </main>
@endsection