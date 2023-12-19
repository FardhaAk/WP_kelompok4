@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Book</h2>
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="post" action="/books">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" name="author" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="year">Year:</label>
                <input type="number" name="year" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="copies_in_circulation">Copies in Circulation:</label>
                <input type="number" name="copies_in_circulation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Book</button>
        </form>
    </div>
@endsection
