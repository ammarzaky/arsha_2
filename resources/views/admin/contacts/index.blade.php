@extends('admin.layouts.dash_app')
@section('title', 'contacts')
@section('content')




    <div class="container">
        <a href="/contacts/create" class="btn btn-primary mb-3">add new contacts</a>
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
                        <th>email</th>
                        <th>phone</th>
                        <th>addres</th>
                        <th>facebook</th>
                        <th>linckedin</th>
                        <th>tweter</th>
                        <th>instegram</th>
                        <th>skybe</th>
                        <th>map</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 1;
                    @endphp

                    @foreach ($contacts as $contacts)
                        <tr>

                            <td>{{ $i++ }}</td>
                            <td>{{ $contacts->name }}</td>
                            <td>{{ $contacts->email }}</td>
                            <td>{{ $contacts->phone }}</td>
                            <td>{{ $contacts->addres }}</td>
                            <td>{{ $contacts->facebook }}</td>
                            <td>{{ $contacts->linkedin }}</td>
                            <td>{{ $contacts->twitter }}</td>
                            <td>{{ $contacts->instgram }}</td>
                            <td>{{ $contacts->skybe }}</td>
                            <td>{{ $contacts->map }}</td>
                            <td>
                                <a href="{{ route('contacts.edit', $contacts->id) }}" class="btn btn-warning mb-3">Edit</a>
                                <form action="{{ route('contacts.destroy', $contacts->id) }}" method="POST">
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
