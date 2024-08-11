<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'title' => 'Laravel for Beginners',
                'description' => 'Learn the basics of Laravel, the popular PHP framework.',
                'price' => 99.99,
                'level' => 'beginner',
                'instructor_id' => 1,
            ],
            [
                'title' => 'Advanced JavaScript',
                'description' => 'Master advanced JavaScript concepts and patterns.',
                'price' => 129.99,
                'level' => 'advanced',
                'instructor_id' => 2,
            ],
            [
                'title' => 'React Native Development',
                'description' => 'Build mobile applications using React Native.',
                'price' => 149.99,
                'level' => 'intermediate',
                'instructor_id' => 3,
            ],
            [
                'title' => 'Data Science with Python',
                'description' => 'Learn how to analyze data and build machine learning models using Python.',
                'price' => 199.99,
                'level' => 'advanced',
                'instructor_id' => 4,
            ],
            [
                'title' => 'AWS Certified Solutions Architect',
                'description' => 'Prepare for the AWS Solutions Architect certification exam.',
                'price' => 299.99,
                'level' => 'advanced',
                'instructor_id' => 5,
            ],
            [
                'title' => 'Introduction to Cybersecurity',
                'description' => 'Get started with cybersecurity concepts and practices.',
                'price' => 79.99,
                'level' => 'beginner',
                'instructor_id' => 6,
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
