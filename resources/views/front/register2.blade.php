<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="assets/js/script.js"></script> 
    <style>
          


  #WebNavBrand{
    padding-left: 5vw;
  }
  
  
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
  
    </style>
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
                        <a class="nav-link text-white" href="/about">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <a class="nav-link active text-white" href="{{'/sesi'}}">Login</a>
                    <a class="btn btn-outline-primary text-white" href="{{'/sesi/register'}}">Register</a>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid hero bg-dark" style="height:100%;">
        <div class="container hero" style="display: block; height:100%;" >
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bold text-white text-center" style="font-size: 60px;">Fill in <span style="color: blue;">your data.</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    
                    <div class="container rounded-2" style="background-color:black;padding-top: 5vh;  padding-bottom:25px; opacity: 0.8;margin-bottom:5vh;">
                        <div>
                        <form action="create" method="POST">
                        @csrf
                        <input type="hidden" name="email" value="{{$email}}">
                        <input type="hidden" name="password" value="{{$password}}">
                        <input type="hidden" name="name" value="{{$name}}">
                            <div class="mb-3">
                                <input type="number" class="formStyle" placeholder="Weight (Kg)" id="exampleInputWeight1" name='weight'>
                            </div>
                            <div class="mb-3">
                                <input type="number" class="formStyle" placeholder="Height (Cm)"id="exampleInputHeight1" name='height'>
                            </div>
                            <!-- <div class="mb-3">
                                <input type="text" class="formStyle" placeholder="Gender" id="exampleInputGender1" name='gender'>
                            </div> -->
                            <center>
                            <div class="dropdown" style="padding-bottom: 5%;">
                                <div class="styled-select">
                                    <select id="select" name="gender" placeholder="Gender">
                                    <option value=""><center>Gender</center></option>
                                    <option value="Male" name="gender"><center>Male</center></option>
                                    <option value="Female" name="gender"><center>Female</center></option>
                                    </select>
                                </div>
                            </div>
                            <center>
                            <div class="mb-3">
                                <input type="number" class="formStyle" placeholder="Age" id="exampleInputAge1" name='age'>
                            </div>
                            <!-- <div class="mb-3">
                                <input type="number" class="formStyle" placeholder="bodygoals" id="exampleInputAge1" name='bodygoals'>
                            </div> -->
                            <center>
                            <div class="dropdown" style="padding-bottom: 5%;">
                                <div class="styled-select">
                                    <select id="select" name="bodygoals" placeholder="Body-Goals">
                                    <option value=""><center>Body Goal</center></option>
                                    <option value="Gain Weight" id="goal" name="bodygoals"><center>Gain Weight</center></option>
                                    <option value="Lose Weight" id="goal" name="bodygoals"><center>Lose Weight</center></option>
                                    </select>
                                </div>
                            </div>
                            <center>

                            <center>
                            {{-- <div class="dropdown" style="padding-bottom: 5%;">
                                <div class="styled-select">
                                    <select id="select" name="select" placeholder="Tech">
                                    <option value=""><center>Body Goal</center></option>
                                    <option value=""><center></center></option>
                                    <option value=""><center></center></option>
                                    <option value=""><center></center></option>
                                    <option value=""><center></center></option>
                                    </select>
                                </div>
                            </div> --}}
                           
                            </center>
                                <!-- <div class="box" aria-haspopup="true">
                                    <button id="btn-dropdown" class="btn-dropdown">Body Goal</button>
                                    <nav id="nav-dropdown" class="nav-dropdown">
                                      <ul>
                                        <li><a href="#">Menu 1</a></li>
                                        <li><a href="#">Menu 2</a></li>
                                        <li><a href="#">Menu 3</a></li>
                                      </ul>
                                    </nav>
                                  </div> -->
                            
                            
                            
                            <button name="submit" type="submit" class="button-rounded2">
                                Register
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </div>
</body>

</html>