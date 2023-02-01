@extends('admin.layouts.dash_app')
@section('title', 'pricing')
@section('content')




    <div class="container">
        <a href="/pricing/create" class="btn btn-primary mb-3">add new question</a>
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
                        <th>Price</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 1;
                    @endphp

                    @foreach ($all_data as $price)
                        <tr>

                            <td>{{ $i++ }}</td>
                            <td>{{ $price->name }}</td>
                            <td>{{ $price->price }}</td>
                            <td>{{ $price->time }}</td>
                            <td>
                                <a href="{{ route('pricing.edit', $price->id) }}" class="btn btn-warning mb-3">Edit</a>
                                <form action="{{ route('pricing.destroy', $price->id) }}" method="POST">
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
