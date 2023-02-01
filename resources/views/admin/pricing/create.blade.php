@extends('admin.layouts.dash_app')
@section('title', 'Add question')

@section('content')
    <div class="container">
        <a href="/pricing" class="btn btn-primary mb-3">View pricing</a>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('pricing.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf




                    <div class="form-groub">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    @error('name')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror





                    <div class="form-groub">
                        <label for="">price</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    @error('price')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror




                    <div class="form-groub">
                        <label for="">time</label>
                        <input type="text" class="form-control" name="time">
                    </div>
                    @error('time')
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
