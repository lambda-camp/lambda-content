@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold">Edit content</h1>
    <div class="md:flex md:flex-row">
        <div class="md:w-1/2 p-5">
            <form action="{{ route('contents.update', $content->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">What is your content title?</span>
                    </div>
                    <input type="text" name="title" placeholder="Type here" class="input input-bordered w-full max-w-xs" value="{{ $content->title }}" required/>
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">What is your content description?</span>
                    </div>
                    <input type="text" name="description" placeholder="Tell a little more about your content" class="input input-bordered w-full max-w-xs" value="{{ $content->title }}" required/>
                </label>
                <textarea name="content" id="box" class="textarea textarea-bordered w-full max-w-xs my-3" placeholder="Write your markdown here!">{{ $content->content }}</textarea>
                <br/>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        <div class="md:w-1/2 p-5 prose" id="content"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script>
        let b = document.getElementById("box");
        let c = document.getElementById("content");
        b.addEventListener("keyup", (event) => {
            c.innerHTML =
                marked.parse(b.value);
        });

        window.addEventListener("load", function (event) {
            c.innerHTML =
                marked.parse(b.value);
        });
    </script>
@endsection