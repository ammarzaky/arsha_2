@extends('admin.layouts.dash_app')
@section('title', 'Add service')

@section('content')
    <div class="container">
        <a href="/pservice" class="btn btn-primary mb-3">View pservice</a>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('pservice.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf




                    <div class="form-groub">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    @error('name')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror





                    <div class="form-groub">
                        <label for="">service</label>
                        <input type="text" class="form-control" name="service">
                    </div>
                    @error('service')
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
