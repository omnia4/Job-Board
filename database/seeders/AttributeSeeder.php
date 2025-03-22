<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    public function run()
    {
        $attributes = [
            ['name' => 'years_experience', 'type' => 'number', 'options' => null],
            ['name' => 'degree_required', 'type' => 'boolean', 'options' => null],
            ['name' => 'employment_type', 'type' => 'select', 'options' => json_encode(['Permanent', 'Contract'])],
        ];

        foreach ($attributes as $attribute) {
            Attribute::create($attribute);
        }
    }
}
