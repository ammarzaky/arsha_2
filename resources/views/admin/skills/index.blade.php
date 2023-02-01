@extends('admin.layouts.dash_app')
@section('title', 'skills')
@section('content')




    <div class="container">
        <a href="/skills/create" class="btn btn-primary mb-3">add new question</a>
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
                        <th>Skill</th>
                        <th>Degree</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 1;
                    @endphp

                    @foreach ($skills as $item)
                        <tr>

                            <td>{{ $i++ }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->degree }}</td>
                            <td>
                                <a href="{{ route('skills.edit', $item->id) }}" class="btn btn-warning mb-3">Edit</a>
                                <form action="{{ route('skills.destroy', $item->id) }}" method="POST">
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
