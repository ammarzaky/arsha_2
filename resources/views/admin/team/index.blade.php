@extends('admin.layouts.dash_app')
@section('title', 'memper')
@section('content')




    <div class="container">
        <a href="/team/create" class="btn btn-primary mb-3">add new Memper</a>
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
                        <th>Job</th>
                        <th>Description</th>
                        <th>facebook</th>
                        <th>linckedin</th>
                        <th>tweter</th>
                        <th>instegram</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 1;
                    @endphp

                    @foreach ($team as $memper)
                        <tr>

                            <td>{{ $i++ }}</td>
                            <td><img src="/image/{{ $memper->image }}" alt="" class="img-fluid" width="60"></td>
                            <td>{{ $memper->name }}</td>
                            <td>{{ $memper->job }}</td>
                            <td>{{ $memper->describtion }}</td>
                            <td>{{ $memper->facebook }}</td>
                            <td>{{ $memper->linkedin }}</td>
                            <td>{{ $memper->twitter }}</td>
                            <td>{{ $memper->instgram }}</td>
                            <td>
                                <a href="{{ route('team.edit', $memper->id) }}" class="btn btn-warning mb-3">Edit</a>
                                <form action="{{ route('team.destroy', $memper->id) }}" method="POST">
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
