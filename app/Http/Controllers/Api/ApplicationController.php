<?php

namespace App\Http\Controllers\Api;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'job_id' => 'required|exists:jobs,id',
            'name' => 'required',
            'email' => 'required|email',
            'resume_link' => 'required|url',
            'cover_note' => 'nullable'
        ]);

        $application = Application::create($request->all());

        return response()->json([
            'message' => 'Application submitted successfully',
            'data' => $application
        ]);
    }
}