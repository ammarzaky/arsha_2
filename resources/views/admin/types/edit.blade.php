@extends('admin.layouts.dash_app')
@section('title', 'Edit Title')

@section('content')
    <div class="container">
        <a href="/types" class="btn btn-primary mb-3">View types</a>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('types.update', $type->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf



                    <h1>Edite Data For {{ $type->possition }}</h1>


                    <div class="form-groub">
                        {{-- <label for="">possition</label> --}}
                        <input type="hidden" class="form-control" name="possition" value="{{ $type->possition }}">
                    </div>
                    @error('possition')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror




                    <div class="form-groub">
                        <label for="">title</label>
                        <input type="text" class="form-control" name="title" value="{{ $type->title }}">
                    </div>
                    @error('title')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror



                    <div class="form-groub">
                        <label for="">body</label>
                        <input type="text" class="form-control" name="body" value="{{ $type->body }}">
                    </div>
                    @error('body')
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
