@extends('admin.layouts.dash_app')
@section('title', 'massages')
@section('content')




    <div class="container">
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
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 1;
                    @endphp

                    @foreach ($massages as $massage)
                        <tr>

                            <td>{{ $i++ }}</td>
                            <td>{{ $massage->name }}</td>
                            <td>{{ $massage->email }}</td>
                            <td>{{ $massage->subject }}</td>
                            <td>{{ $massage->massage }}</td>
                            <td>
                                <form action="{{ route('massages.destroy', $massage->id) }}" method="POST">
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
