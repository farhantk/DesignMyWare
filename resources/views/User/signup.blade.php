<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Sign Up USer</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto my-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Sign Up</h2>
                        <form action="/signup" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Username</label>
                                <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" required value="{{old('name')}}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" required value="{{old('email')}}">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password')is-invalid @enderror" id="password" name="password" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" class="form-control @error('confirm-password')is-invalid @enderror" id="confirm-password" name="confirm-password" required >
                                @error('confirm-password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</body>
</html>