@extends('admin.layouts.dash_app')
@section('title', 'services')
@section('content')




    <div class="container">
        <a href="/pservice/create" class="btn btn-primary mb-3">add new question</a>
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
                        <th>Name</th>
                        <th>Service</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 1;
                    @endphp

                    @foreach ($pservices as $pservice)
                        <tr>

                            <td>{{ $i++ }}</td>
                            <td>{{ $pservice->name }}</td>
                            <td>{{ $pservice->service }}</td>
                            <td>
                                <a href="{{ route('pservice.edit', $pservice->id) }}" class="btn btn-warning mb-3">Edit</a>
                                <form action="{{ route('pservice.destroy', $pservice->id) }}" method="POST">
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
