<?php
namespace App\Services;


use App\Models\Job;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JobFilterService
{
    public static function applyFilters(Request $request): Builder
    {
        $query = Job::query();

        if ($request->has('title')) {
            $query->where('title', 'LIKE', '%' . $request->input('title') . '%');
        }
        if ($request->has('company_name')) {
            $query->where('company_name', 'LIKE', '%' . $request->input('company_name') . '%');
        }
        if ($request->has('salary_min')) {
            $query->where('salary_min', '>=', $request->input('salary_min'));
        }
        if ($request->has('salary_max')) {
            $query->where('salary_max', '<=', $request->input('salary_max'));
        }
        if ($request->has('is_remote')) {
            $query->where('is_remote', $request->input('is_remote'));
        }
        if ($request->has('job_type')) {
            $query->where('job_type', $request->input('job_type'));
        }


        return $query;
    }
}
