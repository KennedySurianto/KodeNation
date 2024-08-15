<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KodeNation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #36393e;
        }

        .pagination {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            justify-content: center;
        }

        .pagination .page-item .page-link {
            background-color: #343a40;
            color: #fff;
            border: 1px solid #495057;
            transition: background-color 0.3s ease-in-out;
        }

        .pagination .page-item .page-link:hover {
            background-color: #495057;
            color: #fff;
        }

        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }

        .pagination .page-item.disabled .page-link {
            background-color: #343a40;
            color: #6c757d;
            border-color: #495057;
        }
    </style>
    @stack('styles')
</head>

<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="{{ route('home') }}"
                    class="d-flex align-items-center mx-2 mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="me-2 bi bi-laptop" viewBox="0 0 16 16">
                        <path
                            d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5" />
                    </svg>
                    <h2>KodeNation</h2>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    @if (Auth::check())
                    @if(Auth::user()->role === 'admin')
                    <li><a href="{{ route('admin.instructors.manage') }}" class="nav-link px-2 text-white">Manage
                            Instructors</a></li>
                    <li><a href="{{ route('admin.courses.manage') }}" class="nav-link px-2 text-white">Manage
                            Courses</a></li>
                    <li><a href="{{ route('admin.students.manage') }}" class="nav-link px-2 text-white">Manage
                            Students</a>
                    </li>
                    @elseif (Auth::user()->role === 'instructor')
                    <li><a href="{{ route('courses.index') }}" class="nav-link px-2 text-white">Manage Courses</a></li>
                    <li><a href="{{ route('students.index') }}" class="nav-link px-2 text-white">Manage Students</a>
                    </li>
                    @elseif (Auth::user()->role === 'student')
                    <li><a href="{{ route('courses.index') }}" class="nav-link px-2 text-white">Browse Courses</a></li>
                    <li><a href="{{ route('student.courses') }}" class="nav-link px-2 text-white">My Courses</a></li>
                    @endif
                    @else
                    <li><a href="{{ route('courses.index') }}" class="nav-link px-2 text-white">Browse Courses</a></li>
                    @endif
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                @if(Auth::check())
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item" type="submit">Sign out</button>
                            </form>
                        </li>
                    </ul>
                </div>
                @else
                <div class="text-end">
                    <a href="{{ route('login') }}" type="button" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ route('register') }}" type="button" class="btn btn-warning">Sign-up</a>
                </div>
                @endif
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container my-5">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-light">About</a></li>
        </ul>
        <p class="text-center text-light">© 2024 Company, Inc</p>
    </footer>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                var alertSuccess = document.querySelector('.alert-success');
                var alertError = document.querySelector('.alert-danger');

                if (alertSuccess) {
                    alertSuccess.classList.remove('show');
                    alertSuccess.classList.add('fade');
                }

                if (alertError) {
                    alertError.classList.remove('show');
                    alertError.classList.add('fade');
                }
            }, 5000); // 5000ms = 5 seconds
        });
    </script>


    @stack('scripts')
</body>

</html>
