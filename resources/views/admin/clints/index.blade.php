@extends('admin.layouts.dash_app')
@section('title', 'Clints')
@section('content')




    <div class="container">
        <a href="/clints/create" class="btn btn-primary mb-3">add new CLint</a>
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
                        <th>Name</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 1;
                    @endphp

                    @foreach ($clints as $clint)
                        <tr>

                            <td>{{ $i++ }}</td>
                            <td><img src="/image/{{ $clint->image }}" alt="" class="img-fluid" width="60"></td>
                            <td>{{ $clint->name }}</td>
                            <td>
                                <a href="{{ route('clints.edit', $clint->id) }}" class="btn btn-warning mb-3">Edit</a>
                                <form action="{{ route('clints.destroy', $clint->id) }}" method="POST">
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
