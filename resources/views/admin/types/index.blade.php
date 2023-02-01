@extends('admin.layouts.dash_app')
@section('title', 'types')
@section('content')




    <div class="container">
        {{-- use it to add title --}}
        {{-- <a href="/types/create" class="btn btn-primary mb-3">add new title</a>     --}}
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
                        <th>Possition</th>
                        <th>Title</th>
                        <th>body</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 1;
                    @endphp

                    @foreach ($types as $type)
                        <tr>

                            <td>{{ $i++ }}</td>
                            <td>{{ $type->possition }}</td>
                            <td>{{ $type->title }}</td>
                            <td>{{ $type->body }}</td>
                            <td>
                                <a href="{{ route('types.edit', $type->id) }}" class="btn btn-warning mb-3">Edit</a>
                                <form action="{{ route('types.destroy', $type->id) }}" method="POST">
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
