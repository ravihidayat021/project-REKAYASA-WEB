<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
    'title'       => 'required|string|max:255',
    'teknologi'   => 'required|string|max:255',
    'status'      => 'required|in:active,archived',
    'description' => 'nullable|string',
    'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // tambahkan nullable
]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('images'), $imagePath);
        }

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'teknologi' => $request->teknologi,
            'image' => $imagePath,
            'status' => $request->status,
        ]);

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'teknologi' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);

        $project = Project::findOrFail($id);
        $imagePath = $project->image;

        if ($request->hasFile('image')) {
            // if ($project->image) {
            //     unlink(public_path('images/' . $project->image));
            // }
            $imagePath = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('images'), $imagePath);
            $project->image = $imagePath;
        }

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'teknologi' => $request->teknologi,
            'image' => $imagePath,
            'status' => $request->status,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        // if ($project->image) {
        //     unlink(public_path('images/' . $project->image));
        // }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}