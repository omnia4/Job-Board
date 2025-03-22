<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Category;
use App\Models\Job;
use App\Models\Language;
use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    public function run()
    {
        $job = Job::create([
            'title' => 'Senior Laravel Developer',
            'description' => 'We are looking for a Laravel developer...',
            'company_name' => 'Tech Solutions',
            'salary_min' => 5000,
            'salary_max' => 10000,
            'is_remote' => true,
            'job_type' => 'full-time',
            'status' => 'published',
            'published_at' => now(),
        ]);

        $job->languages()->attach(Language::inRandomOrder()->take(2)->pluck('id'));
        $job->locations()->attach(Location::inRandomOrder()->take(1)->pluck('id'));
        $job->categories()->attach(Category::inRandomOrder()->take(1)->pluck('id'));

        $attributes = Attribute::all();
        foreach ($attributes as $attribute) {
            $job->attributes()->attach($attribute->id, ['value' => rand(1, 10)]);
        }
    }
}
