@extends('admin.layouts.dash_app')
@section('title', 'Add Memper')

@section('content')
    <div class="container">
        <a href="/team" class="btn btn-primary mb-3">View Team</a>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf







                    <div class="form-groub">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name" value="{{ $team->name }}">
                    </div>
                    @error('name')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror






                    <div class="form-groub">
                        <label for="">job</label>
                        <input type="text" class="form-control" name="job" value="{{ $team->job }}">
                    </div>
                    @error('job')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror






                    <div class="form-groub">
                        <label for="">describtion</label>
                        <input type="text" class="form-control" name="describtion" value="{{ $team->describtion }}">
                    </div>
                    @error('describtion')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror






                    <div class="form-groub">
                        <label for="">facebook</label>
                        <input type="text" class="form-control" name="facebook" value="{{ $team->facebook }}">
                    </div>
                    @error('facebook')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror






                    <div class="form-groub">
                        <label for="">twitter</label>
                        <input type="text" class="form-control" name="twitter" value="{{ $team->twitter }}">
                    </div>
                    @error('twitter')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror






                    <div class="form-groub">
                        <label for="">linkedin</label>
                        <input type="text" class="form-control" name="linkedin" value="{{ $team->linkedin }}">
                    </div>
                    @error('linkedin')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror






                    <div class="form-groub">
                        <label for="">instgram</label>
                        <input type="text" class="form-control" name="instgram" value="{{ $team->instgram }}">
                    </div>
                    @error('instgram')
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
