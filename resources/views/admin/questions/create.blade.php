@extends('admin.layouts.dash_app')
@section('title', 'Add question')

@section('content')
    <div class="container">
        <a href="/questions" class="btn btn-primary mb-3">View questions</a>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('questions.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf




                    <div class="form-groub">
                        <label for="">question</label>
                        <input type="text" class="form-control" name="que">
                    </div>
                    @error('que')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror





                    <div class="form-groub">
                        <label for="">answer</label>
                        <input type="text" class="form-control" name="ans">
                    </div>
                    @error('ans')
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
