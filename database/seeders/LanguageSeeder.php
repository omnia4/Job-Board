<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    public function run()
    {
        $languages = ['PHP', 'JavaScript', 'Python', 'Java', 'C#'];

        foreach ($languages as $language) {
            Language::create(['name' => $language]);
        }
    }
}
