@extends('admin.layouts.dash_app')
@section('title', 'services')
@section('content')




    <div class="container">
        <a href="/services/create" class="btn btn-primary mb-3">add new service</a>
        <div class="table-responsive">


            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <h3>{{ $message }}</h3>
                </div>
            @endif

            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Nu</th>
                        <th>Image</th>
                        <th>Titlr</th>
                        <th>describtion</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 1;
                    @endphp

                    @foreach ($service as $service)
                        <tr>

                            <td>{{ $i++ }}</td>
                            <td><img src="/icon/{{ $service->icon }}" alt="" class="img-fluid" width="60"></td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->describtion }}</td>
                            <td>
                                <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning mb-3">Edit</a>
                                <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </div>







@endsection
