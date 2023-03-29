<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-10">
                @if (session()->has('error'))
                <div class="d-flex justify-content-center">
                    <div class="alert alert danger alert-dimissible fade show" style="width: 18rem;" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                </div>
                @endif
                @if (session()->has('success'))
                <div class="d-flex justify-content-center">
                    <div class="alert alert-success alert-dimissible fade show mb-3" style="width: 18rem;" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                </div>
                @endif
            <div class="card position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
                <div class="card-body">
                    <form action="/logindata" method="POST">
                    @csrf
                        <h4 class="text-center fw-bold">LOGIN</h4>
                        <hr class="my-4">
                        <div class="mb-3">
                            <label for="exampleInputEmail" class="form-label">Username</label>
                            <input type="username" class="form-control" autocomplete="off" autofocus="off" name="username" id="username">
                          </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" id="password" autocomplete="off" class="form-control" name="password">
                        </div>
                    <button type="submit" class="submit btn btn-outline-dark">Submit</button>  
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>

