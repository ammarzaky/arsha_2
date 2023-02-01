@extends('admin.layouts.dash_app')
@section('title', 'Add contacts')

@section('content')
    <div class="container">
        <a href="/contacts" class="btn btn-primary mb-3">View contacts</a>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf





                    <div class="form-groub">
                        <label for="">name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    @error('name')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror





                    <div class="form-groub">
                        <label for="">email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    @error('email')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror




                    <div class="form-groub">
                        <label for="">phone</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    @error('phone')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror




                    <div class="form-groub">
                        <label for="">addres</label>
                        <input type="text" class="form-control" name="addres">
                    </div>
                    @error('addres')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror






                    <div class="form-groub">
                        <label for="">facebook</label>
                        <input type="text" class="form-control" name="facebook">
                    </div>
                    @error('facebook')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror






                    <div class="form-groub">
                        <label for="">twitter</label>
                        <input type="text" class="form-control" name="twitter">
                    </div>
                    @error('twitter')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror






                    <div class="form-groub">
                        <label for="">linkedin</label>
                        <input type="text" class="form-control" name="linkedin">
                    </div>
                    @error('linkedin')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror






                    <div class="form-groub">
                        <label for="">instgram</label>
                        <input type="text" class="form-control" name="instgram">
                    </div>
                    @error('instgram')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror




                    <div class="form-groub">
                        <label for="">skybe</label>
                        <input type="text" class="form-control" name="skybe" ">
                                                                        </div>
                                                                        @error('skybe')
        <small style="color: red"> {{ $message }} </small>
    @enderror





                                                                        <div class="form-groub">
                                                                            <label for="">map</label>
                                                                            <input type="text" class="form-control" name="map" >
                                                                        </div>
                                                                        @error('map')
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
