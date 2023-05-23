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

                                /*========== SIDEBAR ASIDE ==========*/
        main {
            display: grid;
            grid-template-columns: 8rem 42rem auto;
            gap: 2rem;
            width: 96%;
            margin: 1rem auto 4rem;
        }

        main aside {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 88vh;
        }
            /* Mobile Only */
        main aside button#close-btn {
            display: none;
        }

        main aside .sidebar a {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            height: 4.2rem;
            color: var(--color-gray-light);
            position: relative;
        }

        main aside .sidebar a span {
            font-size: 1.7rem;
            margin-left: 3rem;
            transition: all 300ms ease;
        }

        main aside .sidebar a.active {
            background: var(--color-white);
            color: var(--color-primary);
        }

        main aside .sidebar a.active:before {
            content: '';
            width: 6px;
            height: 100%;
            position: absolute;
            background: var(--color-primary);
        }

        main aside .sidebar a:hover {
            color: var(--color-primary);
        }

        main aside .sidebar a:hover span {
            margin-left: 2rem;
        }

        main aside .sidebar h4 {
            font-weight: 500;
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
            width: 5rem;
            padding: 0.4rem;
        }

        main section.middle .card .top .right img{
            width: 3.5rem;
        }

                                        /*========== DAILY INTAKE ===========*/
        main .daily-intake {
            display: grid; 
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            justify-content: space-between;
            margin-top: 2rem;
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

        main .your-goals .goals {
            display: flex;
            gap: 1rem;
            align-self: center;
            flex-wrap: wrap;
            max-width: 100%;
        }

        main .your-goals .goal span{
            width: 7px;
            height: 7px;
            border-radius: 50%;
        }

        main .your-goals .goal {
            padding: 0.5rem var(--card-padding);
            background: var(--color-white);
            border-radius: var(--border-radius-2);
            display: flex;
            align-items: center;
            gap: 1rem;
            transition: all 300ms ease;
        }

        main .your-goals .goal:hover {
            box-shadow: 0 0 1.5rem var(--color-gray-light);
            cursor: pointer;
        }

        main .your-goals .goal:first-child span {
            display: flex;
            align-self: center;
            justify-content: center;
            height: fit-content;
            font-size: 1.5rem;
        }

        main .your-goals .goal div{
            display: flex;
            gap: 2rem;
            align-self: center;
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
                                    <!--===== WELCOME BACK MAMAT ======-->
                                    <!--===== END OF NAVBAR =====-->

    <main>
        <aside>
            <button id="close-btn">
                <span class="material-icons-sharp">close</span>
            </button>

            <div class="sidebar">
                <img src="https://1000logos.net/wp-content/uploads/2016/10/Amazon-Logo-768x480.png" class="logo">
                <a href="#" class="active">
                    <span class="material-icons-sharp">home</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">fitness_center</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">tune</span>
                </a>
            </div>
        </aside>
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
                <input type="date">
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
                        <h1>1200</h1>
                        
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <h4>KCal left</h4>
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
                        <h1>BACK</h1>
                        
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <h4>Workout</h4>
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
                    <h3>2200kcal</h3>
                    <h5>Calories</h5>
                </div>

                <!-- PROTEIN -->
                <div class="goal">
                    <div>
                        <h3>120gr</h3>
                        <h5>Protein</h5>
                    </div>
                </div>

                <!-- WATER -->
                <div class="goal">
                    <div>
                        <h3>2.5L</h3>
                        <h5>Water</h5>
                    </div>
                </div>
            </div>

            <div class="your-goals">
                <h2>Your Goals</h2>
                <div class="goals">
                    <div class="goal">
                        <span class="material-icons-sharp">add</span>
                    </div>
                    <div class="goal">
                        <span class="bg-primary"></span>
                        <div>
                            <h5>Training</h5>
                            <h4>50$</h4>
                        </div>
                    </div>
                    <div class="goal">
                        <span class="bg-danger"></span>
                        <div>
                            <h5>Training</h5>
                            <h4>50$</h4>
                        </div>
                    </div>
                    <div class="goal">
                        <span class="bg-success"></span>
                        <div>
                            <h5>Training</h5>
                            <h4>50$</h4>
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
                    <a href="#"><span class="material-icons-sharp">add_circle</span></a>
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
                                        <!--===== ACTIVITY 3 =====-->
                <div class="activity">
                    <img src="https://cdn-icons-png.flaticon.com/512/92/92767.png">
                    <h4>Jogging</h4>
                    <div class="object">
                        <p>32 Mins</p>
                        <small class="text-muted">300ml</small>
                    </div>
                    <div class="time">
                        <p>9.14pm</p>
                        <small class="text-muted">23/5</small>
                    </div>
                    <div class="calories">
                        <h4>350 KCal</h4>
                        <small class="success">Burned</small>
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