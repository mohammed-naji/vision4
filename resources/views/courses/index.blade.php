<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style>
        td, th {
            vertical-align: middle;
        }
    </style>

    <title>Courses</title>
  </head>
  <body>

    <div class="container mt-5">
        <div class="mb-5 d-flex justify-content-between align-items-center">
            <h1>All Courses</h1>

            <a class="btn btn-outline-dark" href="{{ route('courses.create') }}">Add New Course</a>
        </div>

        @if (session('msg'))
        <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
            {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif



        <table class="table table-bordered table-hover table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>

            @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->title }}</td>
                <td>{{ $course->price }}$</td>
                <td><img width="120" src="{{ asset('uploads/images/'.$course->image) }}" alt=""></td>
                <td>{{ $course->created_at }}</td>
                <td>
                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> </a>


                    {{-- <a href="{{ route('courses.destroy', $course->id) }}" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a> --}}

                    <form class="d-inline" action="{{ route('courses.destroy', $course->id) }}" method="POST">

                        @csrf
                        @method('delete')

                        <button onclick="return confirm('هل انت متاكد اخوي')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>

                    </form>

                </td>
            </tr>
            @endforeach
        </table>
        {{ $courses->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
