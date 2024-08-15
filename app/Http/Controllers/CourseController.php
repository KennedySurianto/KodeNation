<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::paginate(10);
        $categories = Category::all();
        return view('guest.browse_courses', compact('courses', 'categories'));
    }

    public function category($id) {
        $courses = Course::whereHas('categories', function($query) use ($id) {
            $query->where('categories.id', $id);
        })->paginate(10);
        $categories = Category::all();
        return view('guest.browse_courses', compact('courses', 'categories'));
    }
}
