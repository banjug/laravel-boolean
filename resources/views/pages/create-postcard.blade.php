@extends('layouts.main-layout')
@section('content')
    <main id="app" class="container">
        <form 
            action="{{route('store.postcard')}}" 
            method="POST" 
            enctype="multipart/form-data">

            @method('POST')
            @csrf

            <div class="form-group">
                <label for="sender">Sender</label>
                <input type="text" name="sender" class="form-control">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <input type="text" name="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="SAVE" class="btn btn-primary">
            </div>
        </form>
    </main>
@endsection