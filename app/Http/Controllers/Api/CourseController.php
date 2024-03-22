<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'discription' => 'required',
            'banner' => 'required|max:255',
            'people' => 'required|integer'
        ]);

        Course::create($validated);

        dd('Validated & stored');
    }

    public function index()
    {
        return response()->json(Course::all());
    }
}
