<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobRequest;
use App\Http\Resources\JobResource;
use App\Models\Job;
use App\Services\JobFilterService;
use App\Services\Response;
use Illuminate\Http\Request;
class JobController extends Controller
{ public function index(Request $request)
    {
        $query = JobFilterService::applyFilters($request);
        $jobs = $query->get();

        return (new Response())
            ->code(200)
            ->message($jobs->isEmpty() ? 'No jobs found' : 'Jobs retrieved successfully')
            ->data($jobs->isEmpty() ? [] : JobResource::collection($jobs))
            ->json();
    }

    public function store(JobRequest $request)
    {
        $job = Job::create($request->validated());

        return (new Response())
            ->code(200)
            ->message('Job created successfully')
            ->data(new JobResource($job))
            ->json();
    }

    public function show(Job $job)
    {
        return (new Response())
            ->code(200)
            ->message('Job retrieved successfully')
            ->data(new JobResource($job))
            ->json();
    }

    public function update(JobRequest $request, Job $job)
    {
        $job->update($request->validated());

        return (new Response())
            ->code(200)
            ->message('Job updated successfully')
            ->data(new JobResource($job))
            ->json();
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return (new Response())
            ->message('Job deleted successfully')
            ->json();
    }
}
