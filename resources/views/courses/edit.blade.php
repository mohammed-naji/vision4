<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <title>Courses</title>
  </head>
  <body>

    <div class="container mt-5">
        <div class="mb-5 d-flex justify-content-between align-items-center">
            <h1>Update Course : <span class="text-danger">{{ $course->title }}</span></h1>

            <a class="btn btn-outline-dark" href="{{ route('courses.index') }}">Return Back</a>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')


            <div class="mb-3">
                <label>Title</label>
                <input name="title" class="form-control" type="text" placeholder="Title" value="{{ $course->title }}" />
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input name="price" class="form-control" type="text" placeholder="Price" value="{{ $course->price }}" />
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input name="image" class="form-control" type="file" />
                <img width="120" src="{{ asset('uploads/images/'.$course->image) }}" alt="">
            </div>

            <button class="btn btn-warning px-5 btn-lg">Update</button>
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
