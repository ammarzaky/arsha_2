@extends('admin.layouts.dash_app')
@section('title', 'questions')
@section('content')




    <div class="container">
        <a href="/questions/create" class="btn btn-primary mb-3">add new question</a>
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
                        <th>Question</th>
                        <th>answer</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 1;
                    @endphp

                    @foreach ($questions as $question)
                        <tr>

                            <td>{{ $i++ }}</td>
                            <td>{{ $question->que }}</td>
                            <td>{{ $question->ans }}</td>
                            <td>
                                <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-warning mb-3">Edit</a>
                                <form action="{{ route('questions.destroy', $question->id) }}" method="POST">
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
