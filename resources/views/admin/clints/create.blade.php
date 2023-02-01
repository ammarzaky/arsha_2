@extends('admin.layouts.dash_app')
@section('title', 'Add Clint')

@section('content')
    <div class="container">
        <a href="/clints" class="btn btn-primary mb-3">View Clints</a>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('clints.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf






                    <div class="form-groub">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    @error('name')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror




                    <div class="form-groub">
                        <label for="">image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    @error('image')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror






                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block mt-3">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
