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
    <nav class="navbar navbar-expand-lg bg-dark navbar-fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold" href="{{'sesi/landingPage'}}" id="WebNavBrand" style="font-size: 27px;padding-left:5vw;">FITGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-link active">
                        <a class="nav-link text-white" href="/about">About</a>
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
        <div class="container hero" style="display: block;height:100%;">
            <div class="row">
                <div class="col-12" style="padding-top: 5%; text-align: center;">
                    <h1 class="fw-bold text-white" style="font-size: 60px;"> Hello<br><span style="color:blue">User</span>,<br>Let's Be Fit<br>Together</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="padding-top: 20%;text-align: center">
                    <p class="text-white fs-4 fw-bold">Click <span style="color:blue">Login</span> or <span style="color:blue">Register</span> above to continue...</p> 
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>