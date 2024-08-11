<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Web Development', 'description' => 'Courses related to web development and design.'],
            ['name' => 'Data Science', 'description' => 'Courses focused on data analysis, machine learning, and AI.'],
            ['name' => 'Mobile Development', 'description' => 'Courses on building mobile applications for iOS and Android.'],
            ['name' => 'DevOps', 'description' => 'Courses about continuous integration, delivery, and infrastructure as code.'],
            ['name' => 'Cybersecurity', 'description' => 'Courses on protecting systems and networks from digital attacks.'],
            ['name' => 'Cloud Computing', 'description' => 'Courses covering cloud infrastructure and services.'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
