<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href={{ 'style.css' }}>
    <script src="assets/js/script.js"></script> 
    <title>Fitgo</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold" href="landingPage.html" id="WebNavBrand" style="font-size: 27px;">FITGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-link active">
                        <a class="nav-link active text-white" href="landingPage.html">Home</a>
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
    <div class="container-fluid hero" style="background-image: url('https://wallpapercave.com/wp/wp4250294.jpg');">
        <div class="container" >
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bold text-white text-center" style="font-size: 60px;"><span style="color: blue;">Sign Up</span> to your<br>Journey.</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="container rounded-2" style="background-color:black;padding-top: 5vh;  padding-bottom:25px; opacity: 0.8;">
                        <div>
                        <form>
                            <div class="mb-3">
                                <input type="text" class="formStyle" placeholder="Username" id="exampleInputUsername1" name='name'>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="formStyle" placeholder="Email"id="exampleInputEmail1" name= 'email'>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="formStyle" placeholder="Password" id="exampleInputPassword1" name='password'>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="formStyle" placeholder="Confirm Password" id="exampleInputConfirmPassword1" name='confirm_password'>
                            </div>
                            
                            
                            <a href="register2.html" class="button-rounded2" style="text-decoration:none">Continue</a>
                        </form>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </div>
</body>

</html>