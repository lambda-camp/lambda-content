@extends('layouts.app')

@section('content')
    <h1 class="text-7xl font-bold">{{ $content->title }}</h1>
    <div>
        <p class="italic my-2">
            {{ $content->description }}
        </p>

        <article class="prose my-2" id="content">
        </div>
        <a href="{{ route('contents.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script>
        let c = document.getElementById("content");

        window.addEventListener("load", function (event) {
            c.innerHTML =
                marked.parse(`{{ $content->content }}`);
        });
    </script>
@endsection