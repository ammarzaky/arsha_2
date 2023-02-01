@extends('admin.layouts.dash_app')
@section('title', 'portfolios')
@section('content')




    <div class="container">
        <a href="/portfolios/create" class="btn btn-primary mb-3">add new portfolio</a>
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
                        <th>name</th>
                        <th>catigory</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 1;
                    @endphp

                    @foreach ($portfolios as $portfolio)
                        <tr>

                            <td>{{ $i++ }}</td>
                            <td><img src="/image/{{ $portfolio->image }}" alt="" class="img-fluid" width="60"></td>
                            <td>{{ $portfolio->name }}</td>
                            <td>{{ $portfolio->catigories }}</td>
                            <td>
                                <a href="{{ route('portfolios.edit', $portfolio->id) }}"
                                    class="btn btn-warning mb-3">Edit</a>
                                <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST">
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
