<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href={{ 'style.css' }}>
    <script src="assets/js/script.js"></script> 
    <style>
          
/* .sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    z-index: 100;
    padding: 90px 0 0;
    box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    z-index: 99;
  }
  
  @media (max-width: 767.98px) {
    .sidebar {
      top: 11.5rem;
      padding: 0;
    }
  }
  
  .navbar {
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
  }
  
  @media (min-width: 767.98px) {
    .navbar {
      top: 0;
      position: sticky;
      z-index: 999;
    }
  }
  
  .sidebar .nav-link {
    color: #333;
  }
  
  .sidebar .nav-link.active {
    color: #0d6efd;
  } */

  #WebNavBrand{
    padding-left: 5vw;
  }
  /* .hero{
    position: relative; 
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  
    &::before {  
      content: "";
      background-image: url('https://wallpapercave.com/wp/wp4250303.jpg');
      background-size: cover;
      position: absolute;
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
      opacity: 0.75;
    }
  } */
  
  .hero { 
    position: relative; 
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover;
    background-attachment: fixed;
  }
  
  h1{
    font-family: Arial, sans-serif;
    font-size: 14rem;
  }
  
  /* form css */
  .formStyle { 
    background-color: #000000;
    padding: 20px; 
    width: 100%; 
    margin-bottom: 20px; 
    border-bottom-width: 1px; 
    border-bottom-style: solid; 
    border-bottom-color: #ecf0f1; 
    border-top-style: none; 
    border-right-style: none; 
    border-left-style: none; 
    font-size: 1em;
    font-weight: 100;
    color: #ffffff;
  }
  
  .block {
    display: block;
    width: 100%;
    border: 2px solid white;
    background-color: transparent;
    color: white;
    padding: 14px 28px;
    font-size: 24px;
    cursor: pointer;
    text-align: center;
  }
  
  .block:hover {
    background-color: black;
    color: white;
  }
  
  
  ::placeholder {
    color: white;
    opacity: 1; /* Firefox */
  }
  
  :-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: white;
   opacity: 1;
  }
  
  ::-ms-input-placeholder { /* Microsoft Edge */
   color: white;
   opacity: 1;
  }
  
  /* rounded in login.html */
  .button-rounded {
    display: block;
    border-radius: 25px;
    width: 100%;
    border: 2px solid white;
    background-color: white;
    color: black;
    padding: 14px 28px;
    font-size: 24px;
    cursor: pointer;
    text-align: center;
  }
  /* rounded in register.html */
  .button-rounded2 {
    display: block;
    border-radius: 25px;
    width: 75%;
    border: 2px solid white;
    background-color:transparent;
    color: white;
    padding: 14px 28px;
    font-size: 24px;
    cursor: pointer;
    text-align: center;
    margin: auto;
  }

  /* rounded in dashboard-intake.blade.php */
.button-rounded3 {
  display: block;
  border-radius: 25px;
  width: 100%;
  border: 2px solid white;
  background-color: white;
  color: black;
  padding: 14px 28px;
  cursor: pointer;
  text-align: center;
}
  /* dropdown */
  
  .dropdown{
    margin: auto;
  }
  
  .styled-select{
    margin: auto;
  }
  select {
    margin: auto;
    padding-left: 25%;
    border-radius: 25px;
    width: 75%;
    border: 1px solid white;
    padding: 14px 28px;
    font-size: 20px;
    text-align: center;
    color: black;
    cursor: pointer;
    appearance: none;
    background: white;
  }
  
  option {
    background:white;
    font-size: 20px;
    padding: 8px 28px;
  }
  /* dropdown menu resgister2.html 
  
  
  .box {
    position: relative;
  }
  .btn-dropdown {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background: white;
    color: black;
    font-size: 1.25rem;
    outline: none;
    cursor: pointer;
  }
  .btn-dropdown::after {
    display: inline-block;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    width: 8px;
    height: 8px;
    margin-left: 10px;
    border-right: 2px solid #FFF;
    border-bottom: 2px solid #FFF;
    vertical-align: 4px;
    content: '';
  }
  .btn-dropdown:hover {
    opacity: .9;
  }
  .nav-dropdown {
    display: none;
    position: absolute;
    top: 50px;
    left: 0;
    right: 0;
    padding: 10px 0;
    border-radius: 4px;
    box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, .1);
    background-color: #fff;
  }
  .nav-dropdown ul {
    list-style-type: none;
  }
  .nav-dropdown ul li {
    padding: 8px 0;
    font-size: 18px;
    text-align: center;
    cursor: pointer;
  }
  .nav-dropdown ul li a {
    display: block;
    color: #3d3935;
    text-decoration: none;
  }
  .nav-dropdown ul li:hover {
    background-color: #6666e2;
  }
  .nav-dropdown ul li:hover a {
    color: #fff;
  }
  .nav-dropdown.is-open {
    display: block;
  }
  .btn-dropdown.is-open::after {
    -webkit-transform: rotate(-135deg);
    transform: rotate(-135deg);
    vertical-align: middle;
  }
  @media screen and (max-width: 480px) {
    #container {
      align-items: flex-start;
    }
  } */
  
  /* .formButton {
    float: center;
      background-color:#ffffff;
      display:inline-block;
      color:#000000;
      font-size:28px;
      font-weight: 500;
      padding:6px 24px;
    margin-top: 15px;
      text-decoration:none;
    position: center;
  }
  
  .formButton:hover {
      background-color: #000000;
    color:#ffffff;
  }
  
  .formButton:active {
      position:relative;
      top:3px;
  }
      
   */  
    </style>
    <title>Fitgo</title>
</head>

<body>

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
            </div>
                
    @endif
    
    
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
                        <a class="nav-link text-white" href="/about">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <a class="nav-link active text-white" href="{{'sesi'}}">Login</a>
                    <a class="btn btn-outline-primary text-white" href="{{'sesi/register'}}">Register</a>
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
                        <form action='/sesi/register_continue' method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="formStyle" placeholder="Username" id="name" name='name'>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="formStyle" placeholder="Email"id="email" name= 'email'>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="formStyle" placeholder="Password" id="password" name='password'>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="formStyle" placeholder="Confirm Password" id="confirm_password" name='confirm_password'>
                            </div>
                            
                            
                            <button name="submit" type="submit" class="button-rounded2 ">Continue</button>
                        </form>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </div>
</body>

</html>