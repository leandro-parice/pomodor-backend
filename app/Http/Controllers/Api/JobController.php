<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:jobs,name',
        ]);

        $job = new Job;
        $job->name = $request->name;
        $job->save();

        return $job;
    }
}
