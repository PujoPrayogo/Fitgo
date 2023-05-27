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
        
        main {
            display: grid;
            grid-template-columns: 6rem 46rem auto;
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
            width: 410px;
            padding: 30px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            z-index: 999;
        }

        #show:checked ~ .update-container {
            display: block;
        }

        input[type="checkbox"] {
            display: none;
        }
        .show-btn {
            background: var(--color-dark);
            color: white;
            padding: 0.3rem 1rem;
            font-size: 16px;
            cursor: pointer;
            font-weight: 500;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: all 300ms ease;
        }

        .show-btn:hover {
            background: var(--color-gray-dark);
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

        main section.middle .cards .card {
            background: linear-gradient(--color-white, --color-gray-light);
            padding: var(--card-padding);
            border-radius: var(--card-border-radius);
            color: var(--color-dark);
            height: 17rem;
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
            width: 6.5rem;
            padding: 0.4rem;
        }

        main section.middle .card .top .right img{
            width: 3.5rem;
        }

                                        /*========== DAILY INTAKE ===========*/
        main .daily-intake {
            display: grid; 
            grid-template-columns: repeat(4, 1fr);
            justify-content: center; /* Change to center */
            align-items: center; /* Add this line */
            margin-top: 2.5rem;
            text-align: center;
            border-radius: 10px;
        }

        main .daily-intake .goal {
            padding: 0.6rem var(--card-padding);
            justify-content: center;
            display: flex; /* Add this line */
            flex-direction: column; /* Add this line */
        }

        main .daily-intake .goal:nth-child(1) {
            background: var(--color-danger-light);
        }

        main .daily-intake .goal:nth-child(2) {
            background: var(--color-success-light);
        }

        main .daily-intake .goal:nth-child(3) {
            background: var(--color-purple-light);
        }

        main .daily-intake .goal:nth-child(4) {
            background: var(--color-primary-light);
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

                        /*========== RECENT ACTIVITIES ==========*/
        main section.right .recent-activities {
            background: var(--color-white);
            border-radius: var(--card-border-radius);
            box-shadow: 0 0.5rem 1.5rem rgba( 0, 0, 0, 0.1);
            margin-right: 2rem;
        }

        main section.right .recent-activities img {
            width: 3.5rem;
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
                            <a href="#" class="active">
                                <span class="material-icons-outlined">home</span>
                            </a>
                            <a href="#">
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
                            Welcome back,<span class="greetings-name">Mamat.</span>
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
            <div class="todays-target">
                <h1>Today's Target</h1>
                
                                <!--========== UPDATE FORM ==========-->
                <div class="center">
                    <input type="checkbox" id="show">
                    <label for="show" class="show-btn">Update</label>
                    <div class="update-container">
                        <label for="show" class="update-close-btn"><span class="material-icons-sharp">close</span></label>
                        <div class="text text">Update</div>
                        <form action="#">
                            <div class="data">
                                <label for="update-activity" class="text-question">Activity</label>
                                <input type="text" id="update-activity" name="update-activity">
                            </div>
                            <h2 class="text-question calorie-question">Calories</h2>
                            <label for="cal-add" class="cal-question">Add</label>
                            <input type="radio" id="cal-add" name="cal-type" value="cal-add">
                            <label for="cal-burn" class="cal-question">Burn</label>
                            <input type="radio" id="cal-burn" name="cal-type" value="cal-burn">
                            <div class="data">
                                <label for="update-calorie" class="text-question">Amount (KCal)</label>
                                <input type="text" id="update-calorie">
                            </div>
                            <div class="btn">
                                <div class="inner"></div>
                                <button type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

                                <!--========== CARDS TODAYS TARGET ==========-->
            <div class="cards">
                <!-- CARD 1-->
                <div class="card">
                    <div class="top">
                        <div class="left">
                            <img src="https://cdn-icons-png.flaticon.com/512/1690/1690429.png">
                        </div>
                        
                    </div>
                    <div class="middle">
                        <h1 style="font-size: 2.5rem;">1200</h1>
                        
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <h4 style="font-size: 1.2rem; color: var(--color-gray-dark);">KCal left</h4>
                        </div>
                    </div>
                </div>
                
                <!-- CARD 2 -->
                <div class="card">
                    <div class="top">
                        <div class="left">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAeFBMVEX///8AAADFxcXKysqcnJyGhobd3d17e3vY2NjAwMCJiYlKSkqmpqaCgoI9PT36+vo1NTXt7e2ysrLn5+dFRUVvb28WFhb09PS5ubmurq4tLS1VVVUbGxsNDQ1AQEB8fHxlZWWVlZVaWlpQUFBqampzc3MhISEwMDCKbzXCAAADlUlEQVR4nO2dbVeqQBRGAb2apaBpvuRLZVb//x/eSCAGZrBWc2Ca9v7UWtg8bJURBj0nCAAAAAAAAAAAAAAAAAAAAAAAAAAAAH7EbDbrKHfVRkz0stjtl4e7UdJGWkGyPsXL/W7x0BMOiu7DnNdb4awym2WROxV1fAzLbFt507wzi5XcoVhQsghV3to5HufLSu5R6gh5DqtM2zgYV/e13EeZpH+1ILEoha0m90ki6EoTFIYjiSiFW23uXCDpRpsUCySp7LW5J/tBA21QGEb2oxTWhlz7L6LuKEy5s56kon/rSByJ9QntzE72Q3FliA23tpPmpiSRY/6TnjHX9jOrn0lTZGdT/UyaYvtsw/xcji0nqTwZc68sJ42MSX3LSSrXxlzbkziGUmBoD88M5+vxU3+jDOG44XmPv3r1H03zQV4+P82dNhwVJ1zDL3xKrk7lYYq1GIcNV8rayvrSiMlBv//uGibqIs7FM5BjdaDspMxdw9raSvMUpLkaS9w2rJ+4LhsHrK6mhfmr7qzhtL6laSFXdyE/ddpQd81z0zDeRjdU4rLhWLfpu+MNXDac6DY1XJRrF2OuXDYc6jYNMMQQQwwxxBBDDDHEEEMMBQyTyTQee2k4jqeT9Pr9YzXuwUPDh/TvuFi5GHhnmC06bfLltWvvDLN/XeTfyHn2zjD7ttg+CHNV3wzzb+LkhjcYmhj2Ijl6J2Nue4ZdgSGGJTDsCAwxLIFhR2CIYQkMOwJDDEtg2BEYYlgCw47AEMMSF9dLJXFhvdT/NW/3DbN7T1vvDIt7T5mqx/cP/b8HfL4JPAm8MzzbHIK/8F2MEp4ZasAQQwwxxBBDDDHEEEMMMbRh6P9vuf3/Pb6upsK59qOrht+tqfAL62LE9S2NBY7rIstfV9tk1zziY/XxztenqVXUuVAtqloN2b8aQ0FyV364h3WiAv9rfaXM1/1+f6yU7XTa8H2Pb9M9/lGROscNLYChFBjaI/Le0P86wl3VgjaVZLdfC9r/et7GmuyvHdVkP1qPMh3y0nX1621Dztif4Ey9EaR797TXG8HwZB7sB1WoNpmRe+voZ1Pp9hamF1FkftMdiQKtQmrULuJDsdOMeksb+R4sQZu9goKk2i8kbqff0+y1JcF3lBWO8NhWz66V+tROJLOityKn3b5ru883jnhvuax3nvwkqtJW77wPPO9/CAAAAAAAAAAAAAAAAAAAAAAAAAAAfvMf3xtbe/puvOkAAAAASUVORK5CYII=">
                        </div>
                        
                    </div>
                    <div class="middle">
                        <h1 style="font-size: 2.5rem;">BACK</h1>
                        
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <h4 style="font-size: 1.2rem; color: var(--color-gray-dark);">Workout</h4>
                        </div>
                        <div class="right">

                        </div>
                    </div>
                </div>
            </div>
                                    <!--========== DAILY INTAKE ===========-->
            <div class="daily-intake">
                                <!-- CALORIES -->
                <div class="goal">
                    <h2>2200kcal</h2>
                    <h5>Calories</h5>
                </div>

                <!-- PROTEIN -->
                <div class="goal">
                    <div>
                        <h2>120gr</h2>
                        <h5>Protein</h5>
                    </div>
                </div>

                <!-- WATER -->
                <div class="goal">
                    <div>
                        <h2>2.5L</h2>
                        <h5>Water</h5>
                    </div>
                </div>

                <!-- SLEEP -->
                <div class="goal">
                    <div>
                        <h2>6 Hours</h2>
                        <h5>Sleep</h5>
                    </div>
                </div>
            </div>


            <div class="your-goals">
                <span class="material-icons-sharp">auto_awesome</span>
                <h2>Your Goals</h2>
                <!-- BADGE -->
                <div class="badge">
                    <div class="goal">
                        <span class="material-icons-sharp">scale</span>
                        <h3 class="goal-title">Lose 6kg</h3>
                        <h3 style="color: var(--color-warning);">50%</h3>
                    </div>
                </div>
                <!-- BADGE -->
                <div class="badge">
                    <div class="goal">
                        <span class="material-icons-sharp">fitness_center</span>
                        <h3 class="goal-title">Train 4 Days/week</h3>
                        <h3 style="color: yellowgreen;">75%</h3>
                    </div>
                </div>
            </div>

            <div class="your-goals" style="margin-top: 0.5rem;">
                <div class="badge" style="padding-bottom: 0px; margin-top: 0px;background: var(--color-purple); box-shadow: 0 0.5rem 1.5rem rgba( 0, 0, 0, 0.1);">
                    <div class="goal">
                        <h4 class="goal-title" style="font-size: 1.1rem; color: white; ">"I've failed over and over and over again in my life 
                            and that is why I succeed."<br> - Mike Tyson</h4>
                    </div>
                </div>
            </div>




            </div>
        </section>
        <!--========== RIGHT ==========-->
        <section class="right">
                    <!--========== WEIGHT CHART ==========-->
            <canvas id="chart">
            </canvas>
            
                                    <!--========== RECENT ACTIVITIES ==========-->
            <div class="recent-activities">
                <div class="recent-header">
                    <h1>Recent Activities</h1>
                </div>
                                        <!--===== ACTIVITY 1 =====-->
                <div class="activity">
                    <img src="https://cdn.icon-icons.com/icons2/2796/PNG/512/drink_glass_icon_178118.png">
                    <h4>Drink</h4>
                    <div class="object">
                        <p>Water</p>
                        <small class="text-muted">300ml</small>
                    </div>
                    <div class="time">
                        <p>9.14pm</p>
                        <small class="text-muted">23/5</small>
                    </div>
                    <div class="calories">
                        <h4>0 KCal</h4>
                        <small class="success">No Calorie</small>
                    </div>
                </div>
                                        <!--===== ACTIVITY 2 =====-->
                <div class="activity">
                    <img src="https://cdn-icons-png.flaticon.com/512/4669/4669353.png">
                    <h4>Eat</h4>
                    <div class="object">
                        <p>Snack</p>
                        <small class="text-muted">280Kcal</small>
                    </div>
                    <div class="time">
                        <p>8.20pm</p>
                        <small class="text-muted">23/5</small>
                    </div>
                    <div class="calories">
                        <h4>280 KCal</h4>
                        <small class="danger">Added</small>
                    </div>
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
                labels: ['-6', '-5', '-4', '-3', '-2', 'Last', 'Current'],
                datasets: [
                    {
                        label: 'Weight',
                        data: [72.5, 71, 71.2, 70, 68, 67.2, 66.5],
                        backgroundColor: ['black', 'black', 'black', 'black', 'black', 'black', 'rgb(160, 99, 245)'],
                        borderColor: ['black', 'black', 'black', 'black', 'black', 'black', 'rgb(160, 99, 245)'],
                        borderWidth: 2
                    },
    
                    {
                        label: "Weight before",
                        data: [],
                        borderColor: 'rgb(160, 99, 245)',
                        borderWidth: 2
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        title: {
                            display: true,
                            text: 'Kg'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Weeks'
                        }
                    }
                },
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
                                    fillStyle: 'yellowgreen',
                                    strokeStyle: 'yellowgreen',
                                    lineWidth: 2
                                });
                                labels[1].fillStyle = 'rgb(160, 99, 245)';
                                labels[1].strokeStyle = 'rgb(160, 99, 245)';
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