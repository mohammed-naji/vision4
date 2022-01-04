<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form1</title>
  </head>
  <body>
    <div class="container my-5">
        <h2 class="text-center">Register new account</h2>
        @include('forms.errors')
        <form method="POST" action="{{ route('form2') }}">
            @csrf

            <div class="mb-3">
                <label>First Name</label>
                <input type="text" class="form-control" name="first_name" placeholder="First Name" />
            </div>

            <div class="mb-3">
                <label>Last Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" />
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" />
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" />
            </div>

            <div class="mb-3">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" />
            </div>

            <button class="btn btn-outline-primary">Register</button>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
