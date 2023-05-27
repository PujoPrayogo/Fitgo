<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitgo</title>
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
    <link rel="stylesheet" href="style.css">
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
            font-size: 1.25rem;
            font-weight: 500;
        }
        h6 {
            font-size: 0.66rem;
        }
        p {
            font-size: 1rem;
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

                                /*========== NAV BAR ==========*/
        nav {
            width: 100%;
            background: var(white);
            padding: 1rem 1rem;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            width: 96%;
            margin: 0 auto;
        }

        img.logo {
            width: 7rem;
        }

        nav .greetings-title {
            padding: var(--padding-2) var(--card-padding);
            width: 36vw;
            border-radius: var(--border-radius-2);
            display: flex;
            align-items: center;
            color: var(--color-gray-light);
            position: absolute;
            left: 15%;
            margin-right: 2rem;
            margin-left: 2rem;
        }

        .greetings-name {
            font-size: 1.9rem;
            margin-left: 0.5rem;
            padding-bottom: 0.4rem;
            color: var(--color-dark);
        }

        nav .profile-area {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 4rem;
            flex-direction: row-reverse;
        }

        nav.profile-area .theme-btn span {
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
        }

        nav .profile-area .theme-btn .active {
            background: var(--color-dark);
            border-radius: var(--border-radius-2);
            color: var(--color-white);
        }

        nav .profile-area .profile {
            display: flex;
            gap: 1rem;
            align-items: center;
            flex-direction: row-reverse;
        }

        nav .profile-area .profile-photo {
            display: block;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            overflow: hidden;
        }

        nav .profile-area button {
            display: none;
        }

                                /*========== SIDEBAR ASIDE ==========*/
        main {
            display: grid;
            grid-template-columns: 6rem 46rem auto;
            gap: 2rem;
            width: 96%;
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
        main section.middle .todays-target{
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        main section.middle .todays-target input[type="date"] {
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
            width: auto;
            padding: 5rem;
            box-shadow: 0 25px 30px rgba(0, 0, 0, 1);
            z-index: 999;
        }
        .update-container table {
            margin-top: 2rem;
            width: 100%;
        }
        .update-container table a{
            color: var(--color-light);
        }

        .update-container th{
            font-size: 2.2rem;
            color: white;
            margin-bottom: 2rem;
        }

        .update-container td {
            font-size: 1.4rem;
            color: var(--color-light);
        }

        #show-arms:checked ~ .update-container {
            display: block;
        }

        #show-chest:checked ~ .update-container {
            display: block;
        }

        #show-full:checked ~ .update-container {
            display: block;
        }

        #show-legs:checked ~ .update-container {
            display: block;
        }

        #show-back:checked ~ .update-container {
            display: block;
        }
        

        #show2:checked ~ .update-container {
            display: block;
        }

        #show3:checked ~ .update-container {
            display: block;
        }

        #show4:checked ~ .update-container {
            display: block;
        }

        input[type="checkbox"] {
            display: none;
        }
        .show-btn {
            background: none;
            color: white;
            padding: 0.3rem 1rem;
            font-size: 16px;
            cursor: pointer;
            font-weight: 500;
            transition: all 300ms ease;
        }

        .show-arms-btn:hover {
            box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.1);
        }

        .show-chest-btn:hover {
            box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.1);
        }

        .show-full-btn:hover {
            box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.1);
        }

        .show-legs-btn:hover {
            box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.1);
        }

        .show-back-btn:hover {
            box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.1);
        }

        .show2-btn:hover {
            background: var(--color-gray-dark);
        }

        .show3-btn:hover {
            background: var(--color-gray-dark);
        }

        .show4-btn:hover {
            background: var(--color-gray-dark);
        }

        .update-container .update-close-btn {
            position: absolute;
            color: var(--color-gray-light);
            right: 20px;
            top: 15px;
            font-size: 18px;
            cursor: pointer;
            transition: all 250ms ease;
        }

        .update-container .update-close-btn:hover {
            color: var(--color-light);
            transform: rotate(180deg);
        }

        .update-container .text {
            font-size: 35px;
            font-weight: 600;
            text-align: center;
            color: var(--color-light);
        }

        .update-container .text-question {
            color: white;
        }

        .update-container form {
            margin-top: -20px;
        }

        .update-container form .data {
            height: 45px;
            width: 100%;
            margin: 40px 0;
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
        main section.middle .header {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        main section.middle .cards {
            margin-top: 1rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1.5rem;
        }

        .card-title {
            font-size: 1.45rem;
        }

        .card-title-nutrition {
            font-size: 2.2rem;
        }

        main section.middle .cards .card {
            background: linear-gradient(--color-white, --color-gray-light);
            padding: var(--card-padding);
            border-radius: var(--card-border-radius);
            color: var(--color-dark);
            height: 15.2rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 300ms ease;
        }

        main section.middle .cards .card:hover {
            box-shadow: none;
            
        }

        main section.middle .cards .card:nth-child(1) {
            justify-content: center;
            box-shadow: 0 0.5rem 1.5rem rgba( 0, 0, 0, 0.1);
            align-items: center;
            text-align: center;
        }

        main section.middle .cards .card:nth-child(2) {
            background: linear-gradient(--color-white, --color-gray-light);
            box-shadow: 0 0.5rem 1.5rem rgba( 0, 0, 0, 0.1);
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        main section.middle .cards .card:nth-child(3) {
            background: linear-gradient(--color-white, --color-gray-light);
            box-shadow: 0 0.5rem 1.5rem rgba( 0, 0, 0, 0.1);
        }

        main section.middle .cards .card:hover {
            box-shadow: none;
        }

        main section.middle .card .top{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        main section.middle .card .top .left {
            display: flex;
            gap: 0.5rem;
        }

        main section.middle .card.top.left h2{
            font-weight: 200;
            font-size: 1.4rem;
        }

        main section.middle .card .top .left img {
            width: 5rem;
            padding: 0.4rem;
        }

        main section.middle .card .top .right img{
            width: 3.5rem;
        }

        .right {
            margin-top: 2.4rem;
        }

                                        /*========== DAILY INTAKE ===========*/
        main .daily-intake {
            display: grid; 
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            justify-content: space-between;
            margin-top: 3rem;
            text-align: center;
        }

        main .daily-intake .goal {
            padding: 0.6rem var(--card-padding);
            background: var(--color-white);
            border-radius: var(--card-border-radius);
        }

                                /*========== YOUR GOALS ==========*/
        main .your-goals {
            margin-top: 2rem;
            display: flex;
            align-self: center;
            gap: 2rem;
        }

        main .your-goals .badges {
            display: flex;
            gap: 1rem;
            align-self: center;
            flex-wrap: wrap;
            max-width: 100%;
            color: var(--color-dark);
        }

        main .your-goals .badge span {
            width: 7px;
            height: 7px;
            border-radius: 50%;
        }

        main .your-goals .badge .goal {
            color: var(--color-dark);
            display: flex;
            gap: 1rem;
            align-self: center;
        }

        main .your-goals .badge {
            padding: 0.6rem var(--card-padding);
            background: var(--color-white);
            border-radius: var(--border-radius-2);
            display: flex;
            align-self: center;
            gap: 1rem;
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
            margin-bottom: 2rem;
            border-radius: var(--card-border-radius);
            padding: var(--card-padding);
        }

                        /*========== RECENT ACTIVITIES ==========*/
        main section.right .recent-activities {
            background: var(--color-white);
            border-radius: var(--card-border-radius);
            box-shadow: 0 0.5rem 1.5rem rgba( 0, 0, 0, 0.1);
        }

        main section.right .recent-activities img {
            width: 4rem;
        }

        main section.right .recent-activities .recent-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: var(--card-padding);
            padding-bottom: 0;
            text-align: center;
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

        /* ===== DROPDOWN MENU ===== */
        .dropdown {
            position: relative;
            width: 100%;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            width: 100%;
            overflow: auto;
            box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-content a {
            display: block;
            color: #ffffff;
            padding: 5px;
            text-decoration: none;
        }
        .dropdown-content a:hover {
            color: #ffffff;
            background-color: #00A4BD;
        }
        
    </style>
</head>
<body>
                                    <!--===== WELCOME BACK MAMAT ======-->
                                    <!--===== END OF NAVBAR =====-->

    <main>
        <div class="col-sm-auto bg-dark sticky-top" style="background-color: black; color: white;">
            <div class="d-flex flex-sm-column flex-row flex-nowrap bg-dark align-items-center sticky-top">
                    <!-- SIDEBAR  -->
                <aside>
                    <button id="close-btn">
                        <span class="material-icons-outlined">close</span>
                    </button>
                    <div class="sidebar">
                        <a href="#">
                            <span class="material-icons-outlined">home</span>
                        </a>
                        <a href="#" class="active">
                            <span class="material-icons-outlined">fitness_center</span>
                        </a>
                        <a href="#">
                            <span class="material-icons-outlined">tune</span>
                        </a>
                </aside>
            </div>
        </div>
                                <!--========== MIDDLE ==========-->
        <section class="middle">
            <nav >
                <div class="container">
                    <div class="profile-area">
                        <div class="greetings-title">
                            Hi,<span class="greetings-name">Mamat.</span> &nbsp; Let's get in shape.
                        </div>
                        <div class="profile">
                            <div class="profile-photo">
                                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png">
                            </div>
                        </div>
                        <button id="menu-btn">
                            <span class="material-icons-sharp">menu</span>
                        </button>
                    </div>
                </div>
            </nav>
                                    <!--===== TODAYS TARGET =====--> 
            <div class="todays-target" style="margin-top: 3rem;">
                <h1>Workout Menu</h1>
                
                                <!--========== UPDATE FORM ==========-->
            </div>

                                <!--========== CARDS TODAYS TARGET ==========-->
            <div class="cards">
                <!-- CARD 1-->
                <div class="center">
                    <input type="checkbox" id="show-arms">
                    <label for="show-arms" class="show-btn card bg-dark" style="min-width: 100%;width: auto; min-height: 100%;background-color: black;border-radius:6px;">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <img src="https://media1.popsugar-assets.com/files/thumbor/oStCU38qB6hu1AHCJ5CyLBQ6TAY/fit-in/2048xorig/filters:format_auto-!!-:strip_icc-!!-/2019/02/27/986/n/1922729/6982a2275c7711f34ee2e8.35687035_/i/Why-Women-Work-Out.jpg" class="card-img" alt="..." style="height:100%;">
                                </div>
                                <div class="col-6" >
                                    <div class="card-body text-white" style="height:100%;">
                                        <h5 class="card-title">Arms & Shoulder</h5>
                                        <p class="card-text">6 Excercises</p>
                                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                    </div>
                                </div>
                            </div>
                    </label>
                    <div class="update-container">
                        <label for="show-arms" class="update-close-btn"><span class="material-icons-sharp">close</span></label>
                        <div class="text text">Arm & Shoulders Workout <a href="#" style="color: white;"><span class="material-icons-sharp">help</span></a></div>
                        <table>
                            <tr>
                              <th>Exercises</th>
                              <th>Sets</th>
                              <th>Reps</th>
                            </tr>
                            <tr>
                              <td>1.  <a href="https://www.tiktok.com/@delonixsen/video/7232138041597431066?q=cara%20shoulder%20press&t=1685225923734">Shoulder Press</a></td>
                              <td>2</td>
                              <td>6-10</td>
                            </tr>
                            <tr>
                              <td>2. <a href="https://www.tiktok.com/@davinyonathan_/video/7126802671620738330?q=cara%20bicep%20curl&t=1685225483697">Biceps Curl</a></td>
                              <td>3</td>
                              <td>6-12</td>
                            </tr>
                            <tr>
                              <td>3. <a href="https://www.tiktok.com/@itsismailm/video/7204051963619609882?q=cara%20lateral%20raise&t=1685225540545">Lateral Raise</a></td>
                              <td>3</td>
                              <td>6-15</td>
                            </tr>
                            <tr>
                              <td>4. <a href="https://www.tiktok.com/@enriquedustin/video/7235587509051198725?q=cara%20triceps%20pushdown&t=1685225579300">Triceps Pushdown</a></td>
                              <td>3</td>
                              <td>6-12</td>
                            </tr>
                            <tr>
                              <td>5. <a href="https://www.tiktok.com/@petermiljak/video/7222056950404549893?q=cara%20rear%20delts%20fly&t=1685225619939">Rear Delts</a> Fly</td>
                              <td>3</td>
                              <td>6-10</td>
                            </tr>
                            <tr>
                              <td>6. <a href="https://www.tiktok.com/@petermiljak/video/7203523591130877190?q=cara%20hammer%20curl&t=1685225689625">Hammer Curl</a></td>
                              <td>2-3</td>
                              <td>6-10</td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <!-- CARD 2 -->
                <div class="card" style="min-width: 100%;width: auto; min-height: 100%;background-image: url('https://wallaland.com/wp-content/uploads/wallpapers/art/illustration/Emoji/Wallaland%20Emoji%20Fire.jpg');border-radius:6px;background-position-y: 65%; background-position-x: 50%; background-size: cover;">
                    <div class="row no-gutters my-auto">
                        <div class="col-4 text-white my-auto mx-auto ">
                            <h1 class="text-center my-auto">300</h1>
                        </div>
                        <div class="col-8" >
                            <div class="card-body text-white">
                                <h5 class="card-title my-auto">Calories Burned</h5>
                                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                    <!--========== DAILY INTAKE ===========-->
            <div class="cards">
                <!-- CARD CHEST & TRICEPS -->
                <div class="center">
                    <input type="checkbox" id="show-chest">
                    <label for="show-chest" class="show-btn card bg-dark" style="min-width: 100%;width: auto; min-height: 100%;background-color: black;border-radius:6px;">
                        <div class="row no-gutters">
                                <div class="col-6">
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Chest & <br> Triceps</h5>
                                        <p class="card-text">5 Excercises</p>
                                    </div>
                                </div>
                                <div class="col-6" >
                                    <img src="https://i1.wp.com/lovekarmapassion.com/wp-content/uploads/2020/06/250063-1600x1067-exercising.jpg?fit=1600%2C1067&ssl=1" class="card-img" alt="..." style="height: 100%;object-fit: cover;">
                                </div>
                            </div>
                    </label>
                    <div class="update-container">
                        <label for="show-chest" class="update-close-btn"><span class="material-icons-sharp">close</span></label>
                        <div class="text text">Chest & Triceps Workout <a href="#" style="color: white;"><span class="material-icons-sharp">help</span></a></div>
                        <table>
                            <tr>
                              <th>Exercises</th>
                              <th>Sets</th>
                              <th>Reps</th>
                            </tr>
                            <tr>
                              <td>1. <a href="https://www.tiktok.com/@ucan.fit/video/7183707661702073626?q=cara%20bench%20press&t=1685225287594">Bench Press</a></td>
                              <td>3</td>
                              <td>5-8</td>
                            </tr>
                            <tr>
                              <td>2. <a href="https://www.tiktok.com/@itsismailm/video/7204051963619609882?q=cara%20lateral%20raise&t=1685225540545">Lateral Raise</a></td>
                              <td>3</td>
                              <td>6-12</td>
                            </tr>
                            <tr>
                              <td>3. <a href="https://www.tiktok.com/@ucan.fit/video/7194794679056010522?q=cara%20chest%20fly&t=1685226031028">Chest Fly</a></td>
                              <td>3</td>
                              <td>6-12</td>
                            </tr>
                            <tr>
                              <td>4. <a href="https://www.tiktok.com/@delonixsen/video/7232138041597431066?q=cara%20shoulder%20press&t=1685225923734">Shoulder Press</a></td>
                              <td>2</td>
                              <td>6-12</td>
                            </tr>
                            <tr>
                              <td>5. <a href="https://www.tiktok.com/@enriquedustin/video/7235587509051198725?q=cara%20triceps%20pushdown&t=1685225579300">Triceps Pushdown</a></td>
                              <td>3</td>
                              <td>6-12</td>
                            </tr>
                          </table>
                    </div>
                </div>

                <!-- FULL BODY -->
                <div class="center">
                    <input type="checkbox" id="show-full">
                    <label for="show-full" class="show-btn card bg-dark" style="min-width: 100%;width: auto; min-height: 100%;background-color: black;border-radius:6px;">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Full <br>body</h5>
                                        <p class="card-text">6 Excercises</p>
                                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                    </div>
                                </div>
                                <div class="col-6" >
                                    <img src="https://www.theindustry.fashion/wp-content/uploads/2023/02/David-B-Gymshark1.jpg" class="card-img" alt="..." style="object-fit: cover;height: 100%;min-height: 118px;">
                                </div>
                            </div>
                    </label>
                    <div class="update-container">
                        <label for="show-full" class="update-close-btn"><span class="material-icons-sharp">close</span></label>
                        <div class="text text">Full Body Workout <a href="#" style="color: white;"><span class="material-icons-sharp">help</span></a></div>
                        <table>
                            <tr>
                              <th>Exercises</th>
                              <th>Sets</th>
                              <th>Reps</th>
                            </tr>
                            <tr>
                                <td>1. <a href="https://www.tiktok.com/@ucan.fit/video/7183707661702073626?q=cara%20bench%20press&t=1685225287594">Bench Press</a></td>
                                <td>3</td>
                                <td>5-8</td>
                            </tr>
                            <tr>
                              <td>2. <a href="https://www.tiktok.com/@just.smoll/video/7193678534794218779?q=cara%20squat&t=1685226350839">Barbell/Dumbbell Squat</a></td>
                              <td>3</td>
                              <td>5-8</td>
                            </tr>
                            <tr>
                              <td>3. <a href="https://www.tiktok.com/@neveres_id/video/7190603734978694427?q=cara%20lat%20pulldown&t=1685226404862">Lat Pulldown</a></td>
                              <td>3</td>
                              <td>6-12</td>
                            </tr>
                            <tr>
                                <td>4. <a href="https://www.tiktok.com/@enriquedustin/video/7235587509051198725?q=cara%20triceps%20pushdown&t=1685225579300">Triceps Pushdown</a></td>
                                <td>3</td>
                                <td>6-12</td>
                            </tr>
                            <tr>
                                <td>5. <a href="https://www.tiktok.com/@davinyonathan_/video/7126802671620738330?q=cara%20bicep%20curl&t=1685225483697">Biceps Curl</a></td>
                                <td>3</td>
                                <td>6-12</td>
                            </tr>
                            <tr>
                              <td>6. <a href="https://www.tiktok.com/@windysonora/video/7200692918980529435?q=cara%20bulgarian%20split%20squat&t=1685226585277">Bulgarian Split Squat</a></td>
                              <td>2-3</td>
                              <td>6-12</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="cards">
                <!-- LEGS -->
                <div class="center">
                    <input type="checkbox" id="show-legs">
                    <label for="show-legs" class="show-btn card bg-dark" style="min-width: 100%;width: auto; min-height: 100%;background-color: black;border-radius:6px;">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <div class="card-body text-white">
                                        <h5 class="card-title">&nbsp;<br>Legs</h5>
                                        <p class="card-text">5 Excercises</p>
                                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                    </div>
                                </div>
                                <div class="col-6" >
                                    <img src="https://blogscdn.thehut.net/app/uploads/sites/478/2015/12/shutterstock_1185036889-3-min_1637338671.jpg" class="card-img" alt="..." style="object-fit: cover;height: 100%;min-height: 118px; object-position: 70% ;">
                                </div>
                            </div>
                    </label>
                    <div class="update-container">
                        <label for="show-legs" class="update-close-btn"><span class="material-icons-sharp">close</span></label>
                        <div class="text text">Legs Workout <a href="#" style="color: white;"><span class="material-icons-sharp">help</span></a></div>
                        <table>
                            <tr>
                              <th>Exercises</th>
                              <th>Sets</th>
                              <th>Reps</th>
                            </tr>
                            <tr>
                                <td>1. <a href="https://www.tiktok.com/@just.smoll/video/7193678534794218779?q=cara%20squat&t=1685226350839">Barbell/Dumbbell Squat</a></td>
                                <td>3</td>
                                <td>5-8</td>
                            </tr>
                            <tr>
                              <td>2. <a href="https://www.tiktok.com/@seazny/video/7185401608036027674?q=cara%20legs%20curl&t=1685226753526">Legs curl</a></td>
                              <td>3</td>
                              <td>6-12</td>
                            </tr>
                            <tr>
                              <td>3. <a href="https://www.tiktok.com/@vinnie.hasan/video/7185338468136963355?q=cara%20legs%20extension&t=1685226688095">Legs Extension</a></td>
                              <td>3</td>
                              <td>6-15</td>
                            </tr>
                            <tr>
                              <td>4. <a href="https://www.tiktok.com/@windysonora/video/7200692918980529435?q=cara%20bulgarian%20split%20squat&t=1685226585277">Bulgarian Split Squat</a></td>
                              <td>2-3</td>
                              <td>6-10</td>
                            </tr>
                            <tr>
                              <td>5. <a href="https://www.tiktok.com/@reinaldy.atmanegara/video/7162368644163407105?q=cara%20calf%20raise%20&t=1685226850375">Calves Raise</a> Fly</td>
                              <td>2-3</td>
                              <td>6-15</td>
                            </tr>
                        </table>
                    </div>
                </div>


                <!-- BACK & BICEPS -->
                <div class="center">
                    <input type="checkbox" id="show-back">
                    <label for="show-back" class="show-btn card bg-dark" style="min-width: 100%;width: auto; min-height: 100%;background-color: black;border-radius:6px;">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Back &<br> Biceps</h5>
                                        <p class="card-text">6 Excercises</p>
                                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                    </div>
                                </div>
                                <div class="col-6" >
                                    <img src="https://www.shape.com/thmb/O1oRN3A8IGIQjMRatW5gnAYHd5E=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/resistance-band-exercises-for-back-promo-d2f13ed8527549679f2fb7b4bddcd5b4.jpg" class="card-img" alt="..." style="object-fit: cover;height: 100%;min-height: 118px; object-position: 30% ;">
                                </div>
                            </div>
                    </label>
                    <div class="update-container">
                        <label for="show-back" class="update-close-btn"><span class="material-icons-sharp">close</span></label>
                        <div class="text text">Back & Biceps Workout <a href="#" style="color: white;"><span class="material-icons-sharp">help</span></a></div>
                        <table>
                            <tr>
                              <th>Exercises</th>
                              <th>Sets</th>
                              <th>Reps</th>
                            </tr>
                            <tr>
                                <td>1. <a href="https://www.tiktok.com/@neveres_id/video/7190603734978694427?q=cara%20lat%20pulldown&t=1685226404862">Lat Pulldown</a></td>
                                <td>3</td>
                                <td>6-12</td>
                            </tr>
                            <tr>
                              <td>2. <a href="https://www.tiktok.com/@just.smoll/video/7225957033101643034?q=cara%20cable%20row&t=1685227015059">Cable/Dumbbell Rows</a></td>
                              <td>3</td>
                              <td>6-12</td>
                            </tr>
                            <tr>
                                <td>3. <a href="https://www.tiktok.com/@davinyonathan_/video/7126802671620738330?q=cara%20bicep%20curl&t=1685225483697">Biceps Curl</a></td>
                                <td>3-4</td>
                                <td>6-12</td>
                            </tr>
                            <tr>
                              <td>4. <a href="https://www.tiktok.com/@megafit.id/video/7233741947586825478?q=cara%20face%20pull&t=1685227210892">Face pull</a></td>
                              <td>3-4</td>
                              <td>6-12</td>
                            </tr>
                            <tr>
                                <td>5. <a href="https://www.tiktok.com/@petermiljak/video/7203523591130877190?q=cara%20hammer%20curl&t=1685225689625">Hammer Curl</a></td>
                                <td>3</td>
                                <td>6-12</td>
                              </tr>
                            <tr>
                              <td>6. (Opsional)<a href="https://www.tiktok.com/@beanieguylifting/video/7133535418305432859?q=cara%20single%20arm%20lat%20pulldown&t=1685227359432">Single arm lat-pulldown</a></td>
                              <td>2-3</td>
                              <td>6-12</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!--========== RIGHT ==========-->
        <section class="right">
            <!--===== HEADER =====-->
            <div class="recent-header">
                <h1>Today Nutrition Intake</h1>
            </div>

            <!--===== CALORIES AND PROTEIN =====-->
            
                    <div class="card py-2 my-2" style="min-width: 90%;width: auto; background-color: black;border-radius:6px;" >
                        <div class="row no-gutters">
                            <div class="col-12" >
                                <div class="card-body text-white text-center">
                                    <h5 class="card-title my-auto">
                                        Calories : 2500 kcal<br>
                                        Protein  : 120 grams
                                    </h5>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                            </div>
                        </div>
                    </div>

            <!--===== BREAKFAST =====-->
            <div class="center">
                <input type="checkbox" id="show2">
                <label for="show2" class="show-btn">
                    <div class="card py-2 my-2 " style="min-width: 100%;width: auto; background-color: black;border-radius:6px;" >
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="card-body text-white" style="height:100%">
                                    <h5 class="card-title-nutrition">Breakfast</h5>
                                    <p class="card-text">Bubur Ayam</p>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                            </div>
                            <div class="col-6" >
                                <img src="https://img.freepik.com/free-photo/healthy-breakfast-table_144627-43540.jpg?w=2000" class="card-img" alt="..." style="height: 100%;">
                            </div>
                        </div>
                    </div>
                </label>
                <div class="update-container">
                    <label for="show2" class="update-close-btn"><span class="material-icons-sharp">close</span></label>
                    <div class="text text">Menu Breakfast</div>
                    <form action="#">
                        <div class="data">
                            <label for="update-breakfast" class="text-question">Menu</label>
                            <select name="membership" id="membership" style="width: 100%; height: 20px;">
                                <option value="bubur-ayam" selected>Bubur Ayam</option>
                                <option value="roti-gandum">Roti Gandum</option>
                              </select>
                        </div>
                        <div class="btn">
                            <div class="inner"></div>
                            <button type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>

            <!--===== DINNER =====-->
            <div class="center">
                <input type="checkbox" id="show3">
                <label for="show3" class="show-btn">
                    <div class="card py-2 my-2" style="min-width: 100%;width: auto; background-color: black;border-radius:6px;" >
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="card-body text-white" style="height:100%">
                                    <h5 class="card-title-nutrition">Dinner</h5>
                                    <p class="card-text">Chicken Pasta</p>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                            </div>
                            <div class="col-6" >
                                <img src="https://images.squarespace-cdn.com/content/v1/5be122d8f8370ab91d93d1c3/1666561374013-0YCQSNM24VPJV0C835VS/Dinner20222173.jpg" class="card-img" alt="..." style="height: 100%;">
                            </div>
                        </div>
                    </div>
                </label>
                <div class="update-container">
                    <label for="show3" class="update-close-btn"><span class="material-icons-sharp">close</span></label>
                    <div class="text text">Menu Dinner</div>
                    <form action="#">
                        <div class="data">
                            <label for="update-breakfast" class="text-question">Menu</label>
                            <select name="membership" id="membership" style="width: 100%; height: 20px;">
                                <option value="chicken-pasta" selected>Chicken Pasta</option>
                                <option value="steak-and-spinach-mashed-potatoes">Steak And Spinach Mashed Potatoes</option>
                                <option value="quinoa-bowl">Quinoa Bowl</option>
                              </select>
                        </div>
                        <div class="btn">
                            <div class="inner"></div>
                            <button type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
                    

            <!--===== LUNCH =====-->
            <div class="center">
                <input type="checkbox" id="show4">
                <label for="show4" class="show-btn">
                    <div class="cardpy-2 my-2" style="min-width: 100%;width: auto; background-color: black;border-radius:6px;" >
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="card-body text-white">
                                    <h5 class="card-title-nutrition">Lunch</h5>
                                    <p class="card-text">Grilled</p>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                            </div>
                            <div class="col-6" >
                                <img src="https://www.realsimple.com/thmb/rwSxx97nZcOoBb-dZ1ouGqSn-Q4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/gut-healthy-lunch-GettyImages-1042075090-b21164b3fffe49af8868078e224a3e79.jpg" class="card-img" alt="..." style="height: 100%;">
                            </div>
                        </div>
                    </div>
                </label>
                <div class="update-container">
                    <label for="show4" class="update-close-btn"><span class="material-icons-sharp">close</span></label>
                    <div class="text text">Menu Lunch</div>
                    <form action="#">
                        <div class="data">
                            <label for="update-breakfast" class="text-question">Menu</label>
                            <select name="membership" id="membership" style="width: 100%; height: 20px;">
                                <option value="grilled" selected>Grilled</option>
                                <option value="salad-sandwich">Salad Sandwich</option>
                              </select>
                        </div>
                        <div class="btn">
                            <div class="inner"></div>
                            <button type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const chart = document.querySelector("#chart").getContext('2d');
    
        // CREATE NEW CHART INSTANCE
        new Chart(chart, {
            type: 'line',
            data: {
                labels: ['-6 Weeks', '-5 Weeks', '-4 Weeks', '-3 weeks',
                    '-2 Weeks', 'Last Week', 'Current'],
                datasets: [
                    {
                        label: 'Weight (Kg)',
                        data: [72.5, 71.5, 71.7, 71, 70.5, 70.2, 69],
                        backgroundColor: ['black', 'black', 'black', 'black', 'black', 'black', 'blue'],
                        borderColor: ['black', 'black', 'black', 'black', 'black', 'black', 'blue'],
                        borderWidth: 2
                    },
    
                    {
                        label: "Weight before",
                        data: [],
                        borderColor: 'blue',
                        borderWidth: 2
                    }
                ]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Weight Tracks',
                        font: {
                            size: 24
                        }
                    },
                    legend: {
                        labels: {
                            generateLabels: function(chart) {
                                const labels = Chart.defaults.plugins.legend.labels.generateLabels(chart);
                                labels[1].text = 'Current: ' + chart.data.datasets[0].data[6].toFixed(2) + ' Kgs';
                                labels.push({
                                    text: 'Last 6 Weeks: ' + (chart.data.datasets[0].data[6] - chart.data.datasets[0].data[0]).toFixed(2) + ' Kgs',
                                    fillStyle: 'green',
                                    strokeStyle: 'green',
                                    lineWidth: 2
                                });
                                labels[1].fillStyle = 'blue';
                                labels[1].strokeStyle = 'blue';
                                return labels;
                            }
                        }
                    }
                },
                responsive: true
            }
        })
    </script>
</body>
</html>