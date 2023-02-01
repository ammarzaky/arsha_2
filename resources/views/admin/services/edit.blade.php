@extends('admin.layouts.dash_app')
@section('title', 'Edit Service')

@section('content')
    <div class="container">
        <a href="/services" class="btn btn-primary mb-3">View services</a>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf





                    <div class="form-groub">
                        <label for="">title</label>
                        <input type="text" class="form-control" name="title" value="{{ $service->title }}">
                    </div>
                    @error('title')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror





                    <div class="form-groub">
                        <label for="">describtion</label>
                        <input type="text" class="form-control" name="describtion" value="{{ $service->describtion }}">
                    </div>
                    @error('describtion')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror




                    <div class="form-groub">
                        <label for="">icon</label>
                        <input type="file" class="form-control" name="icon">
                    </div>
                    @error('icon')
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
