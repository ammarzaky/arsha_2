@extends('admin.layouts.dash_app')
@section('title', 'Edit question')

@section('content')
    <div class="container">
        <a href="/skills" class="btn btn-primary mb-3">View skills</a>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('skills.update', $skill->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf





                    <div class="form-groub">
                        <label for="">skill</label>
                        <input type="text" class="form-control" name="name" value="{{ $skill->name }}">
                    </div>
                    @error('name')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror



                    <div class="form-groub">
                        <label for="">skill</label>
                        <input type="range" class="form-control" name="degree" value="{{ $skill->degree }}">
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
