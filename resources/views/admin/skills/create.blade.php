@extends('admin.layouts.dash_app')
@section('title', 'Add question')

@section('content')
    <div class="container">
        <a href="/skills" class="btn btn-primary mb-3">View skills</a>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('skills.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf




                    <div class="form-groub">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    @error('name')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror





                    <div class="form-groub">
                        <label for="">degree</label>
                        <input type="range" class="form-control" name="degree">
                    </div>
                    @error('degree')
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
