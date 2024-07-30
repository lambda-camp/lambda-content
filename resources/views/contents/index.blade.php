@extends('layouts.app')

@section('content')
    <div role="alert" class="alert my-3">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            class="stroke-info h-6 w-6 shrink-0">
            <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span>Hey! You're trying :lambda-camp project. Be free to use it and distribute your personal content!</span>
    </div>
    <a href="{{ route('contents.create') }}" class="btn btn-primary my-3">Add Content</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contents as $content)
                <tr>
                    <td>{{ $content->id }}</td>
                    <td>{{ $content->title }}</td>
                    <td>{{ $content->description }}</td>
                    <td>
                        <a href="{{ route('contents.show', $content->id) }}" class="btn btn-info">See</a>
                        <a href="{{ route('contents.edit', $content->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('contents.destroy', $content->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
