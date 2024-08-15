@extends('template.layout')

@section('content')
<div class="container my-4">
    <div class="row">
        <h1 class="text-light">Browse Courses</h1>
        <!-- Course List -->
        <div class="col-md-8">
            <div class="row">
                @if($courses->isEmpty())
                <div class="col-12">
                    <div class="alert alert-dark text-center">
                        No courses found in this category.
                    </div>
                </div>
                @else
                @foreach($courses as $course)
                <div class="col-md-6 w-100 mb-2">
                    <div class="card bg-dark course-card">
                        <div class="card-body text-light">
                            <h5 class="card-title course-title">{{ $course->title }}</h5>
                            <p class="card-text course-description">{{ $course->description }}</p>
                            <p class="card-text"><strong>Price:</strong> $<span class="course-price">{{ $course->price
                                    }}</span></p>
                            <p class="card-text"><strong>Level:</strong> <span class="course-level">{{ $course->level
                                    }}</span></p>
                            <p class="card-text"><strong>Instructor:</strong> <span class="course-instructor">{{
                                    $course->instructor->name }}</span></p>
                            <a href="#" class="btn btn-primary w-100">View Course</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

            <!-- Pagination Links -->
            <div class="d-flex justify-content-center mt-4">
                {{ $courses->links('pagination::bootstrap-4') }}
            </div>
        </div>

        <!-- Category Tab -->
        <div class="col-md-4 mb-2">
            <div class="card bg-dark text-light">
                <div class="card-body">
                    <h4 class="card-title">Categories</h4>
                    <ul class="list-group list-group-flush">
                        @foreach($categories as $category)
                        <li class="list-group-item bg-dark text-light">
                            <a href="{{ route('courses.category', $category->id) }}" class="nav-link">
                                {{ $category->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .course-card {
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }

    .course-card:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
</style>
@endpush

@push('scripts')

@endpush
