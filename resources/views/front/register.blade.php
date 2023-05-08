<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Fitgo</title>
</head>

<body background="assets/img/img-home.png">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold" href="index.html" style="font-size: 27px;">FITGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-link active">
                        <a class="nav-link active text-white" href="index.html">Home</a>
                    </li>
                    <li class="nav-link active">
                        <a class="nav-link text-white" href="/about">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <a class="nav-link active text-white" href="login.html">Login</a>
                    <a class="btn btn-outline-primary text-white" href="register.html">Register</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-6" style="padding-top: 10vh;">
                <h1 class="fw-bold text-white" style="font-size: 60px;">&nbsp;Getting Started</h1>
                <p class="text-white">&emsp;&emsp;let's build our dream body!</p>
            </div>
            <div class="col-6"></div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="container bg-dark rounded" style="padding-top: 5vh; padding-bottom: 5vh;">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputFirstName1" class="form-label text-white">First Name</label>
                            <input type="text" class="form-control" id="exampleInputFirstName1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputLastName1" class="form-label text-white">Last Name</label>
                            <input type="text" class="form-control" id="exampleInputLastName1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputBirth1" class="form-label text-white">Birth</label>
                            <input type="date" class="form-control" id="exampleInputBirth1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputGender1" class="form-label text-white">Gender</label><br>
                            <input type="radio" id="male" name="gender" value="Male">
                            <label for="male" class="text-white">Male</label> &emsp;
                            <input type="radio" id="female" name="gender" value="Female">
                            <label for="female" class="text-white">Female</label><br>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-6"></div>
        </div>
    </div>
</body>

</html>