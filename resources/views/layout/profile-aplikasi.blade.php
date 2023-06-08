<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- GOOGLE MATERIAL ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <!-- GOOGLE FONTS (POPPINS)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- STYLESHEETS -->
    <style>
        /*===== ROOT CSS VARIABLES =====*/
:root{
    --color-white: #ffffff; 
    --color-light: #f0eff5;
    --color-gray-light: #86848c; 
    --color-gray-dark: #56555e; 
    --color-dark: #27282f;
    --color-primary: rgb(71, 7, 234);
    --color-success: rgb(34, 202, 75);
    --color-danger: rgb(255, 67, 54);
    --color-warning: rgb(234, 181, 7);
    --color-purple: rgb(160, 99, 245);
   
    --color-primary-light: rgba(71, 7, 234, 0.2); 
    --color-success-light: rgba(34, 202, 75, 0.2); 
    --color-danger-light: rgba(255, 67, 54, 0.2);
    --color-purple-light: rgba(160, 99, 245, 0.2);
   
    --card-padding: 1.6rem;
    --padding-1: 1rem;
    --padding-2: 8px;
   
    --card-border-radius: 1.6rem;
    --border-radius-1: 1rem;
    --border-radius-2: 6px;
   }
   
   * {
    margin: 0;
    padding: 0;
    outline: 0;
    border: 0;
    appearance: none;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
   }
   
   html {
    font-size: 12px;
   }
   
   body {
    background: var(--color-light);
    font-family: poppins, sans-serif;
    min-height: 100vh;
    color: var(--color-dark);
   }
   
   img {
    width: 100%;
   }
   
                            /*===== TEXT SIZING =====*/
   h1 {
    font-size: 2.2rem;
   }
   h2 {
    font-size: 1.5rem;
   }
   h3 {
    font-size: 1.2rem;
   }
   h4 {
    font-size: 1rem;
   }
   h5 {
    font-size: 0.76rem;
    font-weight: 500;
   }
   h6 {
    font-size: 0.66rem;
   }
   p {
    font-size: 0.86rem;
    color: var(--color-gray-dark);
   }
   small {
    font-weight: 300;
    font-size: 0.77rem;
   }
   
                            /*===== FONT COLOR =====*/
   .text-muted {
    color: var(--color-gray-light);
   }
   .primary {
    color: var(--color-gray-light);
   }
   .danger {
    color: var(--color-danger);
   }
   .success {
    color: var(--color-success);
   }
   .purple {
    color: var(--color-primary);
   }
   
                            /*===== BOX BG COLOR =====*/
   .bg-primary {
    color: var(--color-primary);
    box-shadow: 0 0.8rem var(--color-primary-light);
   }
   .bg-danger {
    color: var(--color-danger);
    box-shadow: 0 0.8rem var(--color-danger-light);
   }
   .bg-success {
    color: var(--color-success);
    box-shadow: 0 0.8rem var(--color-success-light);
   }
   .bg-purple {
    color: var(--color-primary);
    box-shadow: 0 0.8rem var(--color-purple-light);
   }
   .bg-dark {
    background: #27282f;
    box-shadow: 0 0.8rem 0.8rem rgba(0, 0, 0, 0.2);
   }
   
   main {
    display: grid;
    grid-template-columns: 6rem 36rem auto;
    gap: 2rem;
    width: 100%;
   }
   
   /*========== SIDEBAR ASIDE ==========*/
   main aside{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100vh;
    width: 4rem;
   }
   /* cuma di mobile*/
   main aside button#close-btn {
    display: none;
   }
   
   .sidebar {
    display: flex;
    flex-direction: column;
    gap: 1.2rem;
    margin-top: 2rem;
   }
   
   main aside .sidebar a{
    display: flex;
    align-items: center;
    gap: 1.2rem;
    height: 4rem;
    color: var(--color-gray-dark);
    position: relative;
   }
   
   main aside .sidebar a span {
    font-size: 1.7rem;
    margin-left: auto;
    margin-right: auto;
    transition: all 150ms ease;
    display: flex;
    justify-content: center;
   }
   
   main aside .sidebar a.active{
    background: var(--color-gray-light);
    color: var(--color-white);
    border-radius: 10px;
   }
   
   main aside .sidebar a.active:before {
    content: "";
    width: 6px;
    height: 100%;
    position: absolute;
   }
   
   main aside .sidebar a:hover {
    color: var(--color-primary);
    background: var(--color-gray-light);
    transition: all 250ms ease;
    border-radius: 10px;
   }
   
   main aside .updates a{
    display: block;
    width: 100%;
    background: var(--color-primary);
    color: var(--color-white);
    border-radius: var(--border-radius-1);
    padding: 0.8rem 0;
    margin-top: 2rem;
   }
   
   
                        /*=========== MIDDLE ==========*/
   main section.right .todays-target{
    display: flex;
    align-items: center;
    gap: 1rem;
   }
   
   main section.right .todays-target input[type="date"] {
    padding: 0.5rem;
    border-radius: var(--border-radius-2);
    background: var(--color-white);
    color: var(--color-gray-dark);
   }
   
                            /*========== UPDATE FORM ==========*/
   .update-container {
    position: absolute;
    top: 50%;
    left: 50%;
    display: none;
    transform: translate(-50%, -50%);
    background: var(--color-dark);
    width: 410px;
    padding: 30px;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    z-index: 999;
   }
   
   #show:checked ~ .update-container {
    display: block;
   }
   
   #show2:checked ~ .update-container {
    display: block;
   }
   
   input[type="checkbox"] {
    display: none;
   }
   .show-btn {
    background: var(--color-dark);
    margin-top: 3rem;
    margin-left: 3rem;
    color: white;
    padding: 0.5rem 1.2rem;
    font-size: 16px;
    cursor: pointer;
    font-weight: 500;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    transition: all 300ms ease;
   }
   
   
   .show-btn:hover {
    background: var(--color-gray-light);
    border-radius: 10%;
   }
   
   .update-container .update-close-btn {
    position: absolute;
    color: var(--color-white);
    right: 20px;
    top: 15px;
    font-size: 18px;
    cursor: pointer;
    transition: all 250ms ease;
   }
   
   .update-container .update-close-btn:hover {
    color: var(--color-white);
    transform: rotate(180deg);
   }
   
   .update-container .text {
    font-size: 35px;
    font-weight: 600;
    text-align: center;
    color: var(--color-white);
   }
   
   .update-container .text-question {
    color: white;
   }
   
   .update-container #cal-add {
    text-align: center;
   }
   
   .update-container .calorie-question {
    text-align: center;
   }
   
   .update-container form {
    margin-top: -20px;
   }
   
   .update-container form .data {
    height: 45px;
    width: 100%;
    margin: 40px 0;
   }
   
   .update-container form .data:nth-child(2) {
    height: 45px;
    width: 100%;
    margin-top: 10px;
   }
   
   .update-container2 {
    position: absolute;
    top: 50%;
    left: 50%;
    display: none;
   
    transform: translate(-50%, -50%);
    background: var(--color-dark);
    width: 1090px;
    height: 600px;
    padding: 30px;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    z-index: 999;
   }
   
   .update-container2 .update-close-btn {
    position: absolute;
    color: var(--color-white);
    right: 20px;
    top: 15px;
    font-size: 18px;
    cursor: pointer;
    transition: all 250ms ease;
   }
   
   .update-container2 .update-close-btn:hover {
    color: var(--color-white);
    transform: rotate(180deg);
   }
   
   .update-container2 .text {
    font-size: 35px;
    font-weight: 600;
    text-align: center;
    color: var(--color-white);
   }
   
   .update-container2 .text-question {
    color: white;
   }
   
   .update-container2 #cal-add {
    text-align: center;
   }
   
   .update-container2 .calorie-question {
    text-align: center;
   }
   
   .update-container2 form {
    margin-top: -20px;
   }
   
   .update-container2 form .data {
    height: 45px;
    width: 100%;
    margin: 40px 0;
   }
   
   .update-container2 form .data:nth-child(2) {
    height: 45px;
    width: 100%;
    margin-top: 10px;
   }
   
   
   form .data label {
    font-size: 18px;
   }
   
   form .data input {
    height: 100%;
    width: 100%;
    padding-left: 10px;
    font-size: 17px;
    border: 1px solid white;
   }
   
   form .data input:focus {
    border-color: var(--color-gray-dark);
    border-bottom-width: 2px;
   }
   
   form .cal-question {
    color: white;
   }
   
   form .btn {
    margin: 30px 0;
    height: 45px;
    width: 100%;
    position: relative;
    overflow: hidden;
   }        
   
   form .btn .inner {
    height: 100%;
    width: 300%;
    position: absolute;
    left: -100%;
    z-index: -1;
    background: -webkit-linear-gradient(right, 
        var(--color-gray-light), var(--color-light), 
        var(--color-gray-light), var(--color-light));
    transition: all 0.4s;
   }
   
   form .btn:hover .inner {
    left: 0;
   }
   
   form .btn  button{
    height: 100%;
    width: 100%;
    background: none;
    border: none;
    color: #ffffff;
    font-size: 18px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
   }
   
   /* CARDS*/
   
   main section.right .cards {
    margin-top: 2.5rem;
    margin-right: 2.5rem;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1.5rem;
   }
   
   main section.right .cards .card {
    background: linear-gradient(--color-white, --color-gray-light);
    padding: var(--card-padding);
    border-radius: var(--card-border-radius);
    color: var(--color-dark);
    height: 19rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: all 300ms ease;
   }
   
   main section.right .cards .card:hover {
    box-shadow: none;
    
   }
   
   main section.right .cards .card:nth-child(1) {
    justify-content: center;
    box-shadow: 0 0.5rem 1.5rem rgba( 0, 0, 0, 0.1);
    align-items: center;
    text-align: center;
   }
   
   main section.right .cards .card:nth-child(2) {
    background: linear-gradient(--color-white, --color-gray-light);
    box-shadow: 0 0.5rem 1.5rem rgba( 0, 0, 0, 0.1);
    justify-content: center;
    align-items: center;
    text-align: center;
   }
   
   main section.right .cards .card:nth-child(3) {
    background: linear-gradient(--color-white, --color-gray-light);
    box-shadow: 0 0.5rem 1.5rem rgba( 0, 0, 0, 0.1);
   }
   
   main section.right .cards .card:hover {
    box-shadow: none;
   }
   
   main section.right .card .top{
    display: flex;
    justify-content: space-between;
    align-items: center;
   }
   
   main section.right .card .top .left {
    display: flex;
    gap: 0.5rem;
   }
   
   main section.right .card.top.left h2{
    font-weight: 200;
    font-size: 1.4rem;
   }
   
   main section.right .card .top .left img {
    width: 6.5rem;
    padding: 0.4rem;
    margin-top: 1rem;
    margin-bottom: 1rem;
   }
   
   main section.right .card .top .right img{
    width: 4rem;
   }
   
                                /*========== DAILY INTAKE ===========*/
   main .daily-intake {
    display: grid; 
    grid-template-columns: repeat(4, 1);
    text-align: left;
    margin-top: 1.5rem;
    border-radius: 30px;
   }
   
   main .daily-intake .goal {
    padding: 0.6rem var(--card-padding);
    justify-content: center;
    text-align: center;
    display: flex; /* Add this line */
    flex-direction: column; /* Add this line */
   }
   
   main .daily-intake .goal:nth-child(1) {
    background: var(--color-primary-light);
   }
   
   main .daily-intake .goal-2 {
    background: var(--color-purple-light);
   }
   
   main .daily-intake .goal-3 {
    background: var(--color-success-light);
   }
   
   main .daily-intake .goal-4 {
    background: var(--color-danger-light);
   }
   
   
                        /*========== YOUR GOALS ==========*/
   main .your-goals {
    margin-top: 1.5rem;
    display: flex;
    align-self: center;
    gap: 2rem;
   }
   
   main .your-goals .badge span {
    width: 7px;
    height: 7px;
    border-radius: 50%;
   }
   
   main .your-goals .badge .goal {
    color: var(--color-light);
    display: flex;
    gap: 1.15rem;
    align-self: center;
   }
   
   main .your-goals .badge {
    padding: 0.6rem var(--card-padding);
    border-radius: var(--border-radius-2);
    display: flex;
    align-self: center;
    background: var(--color-dark);
    box-shadow: 0 0.5rem 1.5rem rgba( 0, 0, 0, 0.1);
   }
   
   main .your-goals .goals-card{
    width: 18rem;
   }
   
   main .your-goals .goals-card:nth-child(1){
    justify-content: center;
    text-align: center;
   }
   
   main .your-goals .badge span {
    display: flex;
    align-self: center;
    justify-content: center;
    height: fit-content;
   }
   
                    /*===== ANALYTICS CHART =====*/
   canvas#chart {
    background: var(--color-white);
    max-width: 100%;
    margin-bottom: 1rem;
    border-radius: var(--card-border-radius);
    padding: var(--card-padding);
    margin-top: 2rem;
    margin-right: 2rem;
   }

   canvas#chart:hover {
    cursor: pointer;
   }
   
   .weight-update-container {
    position: relative;
    z-index: 999;
    display: block;
    top: 100%;
    right: -25%;
    width: 320px;
    max-height: 0px;
    overflow: hidden;
    transition: max-height 0.5s;
    justify-content: center;
    text-align: center;
    margin-bottom: 2rem;
   
   }
   
   .weight-update-container.open-menu{
    max-height: 160px;
   }
   
   .weight-update-form {
    color: white;
    background: var(--color-dark);
    padding: 20px;
   }
   
                /*========== RECENT ACTIVITIES ==========*/
   main section.right .recent-activities {
    background: var(--color-white);
    border-radius: var(--card-border-radius);
    box-shadow: 0 0.5rem 1.5rem rgba( 0, 0, 0, 0.1);
    margin-right: 2rem;
    overflow: auto;
    height: 17rem;
    margin-bottom: 2rem;
   }
   
   main section.right .recent-activities img {
    width: 3.5rem;
   }
   
   main section.right .recent-activities .recent-header {
    display: flex;
    justify-content: space-between;
    border-radius: var(--card-border-radius);
    align-items: center;
    padding: var(--card-padding);
    padding-bottom: 0;
    text-align: center;
    position: absolute;
    background: white;
    width: 43%;
   }
   
   main section.right .recent-activity-top-divider{
    width: auto;
    height: 5.5rem;
   }
   
   main section.right .recent-activities .recent-header a{
    display: flex;
    align-items: center;
    color: var(--color-primary);
   }
   
   main section.right .recent-activities .activity {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: var(--card-padding);
    border-bottom: 1px solid var(--color-light);
   }
   
   main section.right .recent-activities .activity:last-child {
    border: none;
   }
   
   main section.right .recent-activities .activity:hover {
    background: var(--color-light);
   }
   
   /*========================== RESPONSIVE ===================*/
   /*          MEDIA QUERIES FOR TABLETS           */
   @media screen and (max-width: 1024px) {
    nav .profile-area {
        gap: 2rem;
    }
   
    main{
        grid-template-columns: 1fr;
    }
   
    main aside{
        position: fixed;
        top: 0;
        left: 0;
        z-index: 3;
        width: 22rem;
        height: 100vh;
        display: none;
    }
   
    main aside button#close-btn{
        display: inline-block;
        width: 3rem;
        height: 3rem;
        position: absolute;
        top: 1rem;
        right: 1rem;
        z-index: 4;
        background: transparent;
        color: var(--color-light);
    }
   
    button:hover{
        cursor: pointer;
    }
   
    main aside .sidebar{
        margin-top: 4rem;
    }
   
    main section.right .cards{
        grid-template-columns: 1fr 1fr;
    }
   
    main canvas{
        margin: 3rem 0 1rem;
    }
   
    main section.right .recent-activities {
        margin-top: 3rem;
    }
   }
   
   
        /*              PHONES              */
   @media screen and (max-width: 600px){
    nav .profile-area{
        gap: 2.6rem;
    }
   
    nav .profile span{
        display: none;
    }
   }
    </style>
</head>
<body>
    <main>
            <div class="col-sm-auto bg-dark sticky-top" style="background-color: black; color: white;">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-dark align-items-center sticky-top">
                        <!-- SIDEBAR  -->
                    <aside>
                        <button id="close-btn">
                            <span class="material-icons-outlined">close</span>
                        </button>
                        <div class="sidebar">
                            <a href="/fitgo/{user}">
                                <span class="material-icons-outlined">home</span>
                            </a>
                            <a href="/fitgo/intake/{user}">
                                <span class="material-icons-outlined">fitness_center</span>
                            </a>
                            <a href="/fitgo/profile/{id}" class="active">
                                <span class="material-icons-outlined">person</span>
                            </a>
                    </aside>
                </div>
            </div>
        
                                <!--========== MIDDLE ==========-->
        <section class="middle">
                                    <!--===== TODAYS TARGET =====--> 
            <div class="todays-target">
                    <h1 style="font-size: 9.5rem;">About User</h1>
                </div>
                <div class="daily-intake">
                    <!-- CALORIES -->
                <div class="goal">
                    <h2>@yield('username')</h2>
                    <h5>Username</h5>
                </div>

                <!-- PROTEIN -->
                <div class="goal goal-2">
                    <div>
                        <h2>@yield('email')</h2>
                        <h5>Email</h5>
                    </div>
                </div>

                <!-- WATER -->
                <div class="goal goal-3">
                    <div>
                        <h2>@yield('age')</h2>
                        <h5>Age</h5>
                    </div>
                </div>

                <!-- SLEEP -->
                <div class="goal goal-4">
                    <div>
                        <h2>@yield('body-goals')</h2>
                        <h5>Body Goals</h5>
                    </div>
                </div>
            </div><br>
        </section>
        <!--========== RIGHT ==========-->
        <section class="right">

                                <!--========== CARDS TODAYS TARGET ==========-->
                                <div class="cards">
                                    <!-- CARD 1-->
                                    <div class="card">
                                        <div class="top">
                                            <div class="left">
                                                <img src="https://img.uxwing.com/wp-content/themes/uxwing/download/fitness-gym-yoga-spa/body-weight-scales-icon.png">
                                            </div>
                                            
                                        </div>
                                        <div class="middle">
                                            <h1 style="font-size: 2.5rem;">@yield('weight')Kg</h1>
                                            
                                        </div>
                                        <div class="bottom">
                                            <div class="left">
                                                <h4 style="font-size: 1.2rem; color: var(--color-gray-dark);">Bodyweight</h4>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- CARD 2 -->
                                    <div class="card">
                                        <div class="top">
                                            <div class="left">
                                                <img src="https://cdn-icons-png.flaticon.com/512/3373/3373122.png">
                                            </div>
                                            
                                        </div>
                                        <div class="middle">
                                            <h1 style="font-size: 2.5rem;text-transform: capitalize;">@yield('bmi')</h1>
                                            
                                        </div>
                                        <div class="bottom">
                                            <div class="left">
                                                <h4 style="font-size: 1.2rem; color: var(--color-gray-dark);">Body Mass Index</h4>
                                            </div>
                                            <div class="right">
                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="show-btn">Logout</button>

                                                        <!--========== DAILY INTAKE ===========-->
                                
                    
                  
    </main>
    
</body>
</html>