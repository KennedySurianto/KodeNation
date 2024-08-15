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
            [
                'title' => 'Python for Data Analysis',
                'description' => 'Use Python to analyze and visualize data efficiently.',
                'price' => 119.99,
                'level' => 'intermediate',
                'instructor_id' => 1,
            ],
            [
                'title' => 'Full-Stack Web Development',
                'description' => 'Become a full-stack developer by mastering both front-end and back-end technologies.',
                'price' => 249.99,
                'level' => 'advanced',
                'instructor_id' => 2,
            ],
            [
                'title' => 'Machine Learning with R',
                'description' => 'Implement machine learning algorithms using R programming language.',
                'price' => 179.99,
                'level' => 'advanced',
                'instructor_id' => 3,
            ],
            [
                'title' => 'Docker for DevOps',
                'description' => 'Learn how to use Docker to build, ship, and run applications.',
                'price' => 139.99,
                'level' => 'intermediate',
                'instructor_id' => 4,
            ],
            [
                'title' => 'Introduction to HTML & CSS',
                'description' => 'Start building websites by learning the basics of HTML and CSS.',
                'price' => 49.99,
                'level' => 'beginner',
                'instructor_id' => 5,
            ],
            [
                'title' => 'Ethical Hacking for Beginners',
                'description' => 'Learn ethical hacking techniques and how to secure networks.',
                'price' => 89.99,
                'level' => 'beginner',
                'instructor_id' => 6,
            ],
            [
                'title' => 'Kubernetes for Developers',
                'description' => 'Master Kubernetes and container orchestration to manage your applications.',
                'price' => 199.99,
                'level' => 'advanced',
                'instructor_id' => 1,
            ],
            [
                'title' => 'UI/UX Design Fundamentals',
                'description' => 'Understand the principles of UI/UX design to create better user experiences.',
                'price' => 109.99,
                'level' => 'beginner',
                'instructor_id' => 2,
            ],
            [
                'title' => 'Ruby on Rails for Beginners',
                'description' => 'Get started with Ruby on Rails, a powerful web development framework.',
                'price' => 119.99,
                'level' => 'beginner',
                'instructor_id' => 3,
            ],
            [
                'title' => 'Digital Marketing Strategy',
                'description' => 'Learn how to create and implement effective digital marketing strategies.',
                'price' => 149.99,
                'level' => 'intermediate',
                'instructor_id' => 4,
            ],
            [
                'title' => 'Introduction to Blockchain',
                'description' => 'Discover the fundamentals of blockchain technology and its applications.',
                'price' => 199.99,
                'level' => 'intermediate',
                'instructor_id' => 5,
            ],
            [
                'title' => 'Mobile App Development with Swift',
                'description' => 'Create iOS applications using Swift programming language.',
                'price' => 179.99,
                'level' => 'advanced',
                'instructor_id' => 6,
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
