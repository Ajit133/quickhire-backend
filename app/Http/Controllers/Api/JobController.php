<?php

namespace App\Http\Controllers\Api;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $query = Job::query();

        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        if ($request->location) {
            $query->where('location', $request->location);
        }

        if ($request->category) {
            $query->where('category', $request->category);
        }

        return response()->json($query->latest()->get());
    }

    public function show($id)
    {
        $job = Job::findOrFail($id);
        return response()->json($job);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);

        $job = Job::create($request->all());

        return response()->json([
            'message' => 'Job created',
            'job' => $job
        ]);
    }

    public function destroy($id)
    {
        Job::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Job deleted'
        ]);
    }
}