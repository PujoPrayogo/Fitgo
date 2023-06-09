<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="assets/js/script.js"></script> 
    <title>Fitgo</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold" href="{{'sesi/landingPage'}}" id="WebNavBrand" style="font-size: 27px;">FITGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-link active">
                        <a class="nav-link text-white" href="{{'/about'}}">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <a class="nav-link active text-white" href="{{'/'}}">Login</a>
                    <a class="btn btn-outline-primary text-white" href="{{'/sesi/register'}}">Register</a>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid hero bg-dark" style="height:100%;">
        <div class="container hero" style="display: block;min-height:90.3vh;height:100%;" >
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bold text-white text-center" style="font-size: 60px;">Welcome <span style="color: blue;">User</span>,<br>Let's Get Fit</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="container rounded-2" style="background-color:black;padding-top: 5vh; padding-bottom: 5vh; opacity: 0.8;">
                        <div>
                            <form action="login" method = "POST">
                            @csrf
                              <input type="email" name="email" class="formStyle" placeholder="Email" required />
                              <input type="password" name="password" class="formStyle" placeholder="Password" required />
                              <button class="block">LOGIN</button>
                            </form>
                        </div>
                        <!-- <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form> -->
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
            <div class="row" style="padding-top: 25px;">
                <div class="col-4"></div>
                <div class="col-4">
                    <a href="{{url("sesi/register")}}" class="button-rounded" style="text-decoration:none">I'm new.</a>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>
    
</body>

</html>