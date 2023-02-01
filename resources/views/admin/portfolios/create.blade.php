@extends('admin.layouts.dash_app')
@section('title', 'Add Image To Your Portfolio')

@section('content')
    <div class="container">
        <a href="/portfolios" class="btn btn-primary mb-3">View portfolio</a>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf




                    <div class="form-groub">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    @error('name')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror





                    <div class="form-groub">
                        <label for="">catigories</label>
                        <input type="text" class="form-control" name="catigories">
                    </div>
                    @error('catigories')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror




                    <div class="form-groub">
                        <label for="">Image</label>
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
