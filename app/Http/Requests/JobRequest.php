<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'company_name' => 'required|string|max:255',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|min:0',
            'is_remote' => 'boolean',
            'job_type' => 'required|in:full-time,part-time,contract,freelance',
            'status' => 'required|in:draft,published,archived',
            'published_at' => 'nullable|date',
            'languages' => 'array',
            'locations' => 'array',
            'categories' => 'array',
            'attributes' => 'array',
        ];
    }
}
