<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        return view('contents.index', compact('contents'));
    }

    public function show($id)
    {
        $content = Content::findOrFail($id);
        return view('contents.show', compact('content'));
    }

    public function create()
    {
        return view('contents.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
        ]);

        Content::create($validatedData);
        return redirect()->route('contents.index')->with('success', 'Content created successfully!');
    }

    public function edit($id)
    {
        $content = Content::findOrFail($id);
        return view('contents.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $content = Content::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
        ]);

        $content->update($validatedData);
        return redirect()->route('contents.index')->with('success', 'Content updated successfully!');
    }

    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        $content->delete();
        return redirect()->route('contents.index')->with('success', 'Content deleted successfully!');
    }
}
