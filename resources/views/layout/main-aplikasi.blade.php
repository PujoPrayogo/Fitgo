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
    <link rel="stylesheet" href="{{ '/css/main-dashboard.css' }}">
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
                            Welcome back,<span class="greetings-name">@yield('profile-name').</span>
                        </div>
                        <div class="profile">
                            <div class="profile-photo">
                                <img src="@yield('profile-photo')">
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
                            <div class="data">
                                <label for="activity-amount" class="text-question">Activity Amount:</label>
                                <input type="text" id="activity-amount" name="activity-amount"><br>
                            </div>  
                            <div class="data">
                                <label for="time" class="text-question">Time:</label>
                                <input type="time" id="time" name="time"><br>
                            </div>
                            <div class="data">
                                <label for="update-calorie" class="text-question">Calories</label>
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
                        <h1 style="font-size: 2.5rem;">@yield('target-kcal')</h1>
                        
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
                        <h1 style="font-size: 2.5rem;">@yield('target-workout')</h1>
                        
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
                    <h2>@yield('daily-cal')kcal</h2>
                    <h5>Calories</h5>
                </div>

                <!-- PROTEIN -->
                <div class="goal">
                    <div>
                        <h2>@yield('daily-protein')gr</h2>
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
                        <h3 class="goal-title">@yield('your-goals-weight-type') @yield('your-goals-weight-amount')kg</h3>
                        <h3 style="color: var(--color-warning);">@yield('your-goals-weight-percentage')%</h3>
                    </div>
                </div>
                <!-- BADGE -->
                <div class="badge">
                    <div class="goal">
                        <span class="material-icons-sharp">fitness_center</span>
                        <h3 class="goal-title">Train 4 Days/week</h3>
                        <h3 style="color: yellowgreen;">@yield('your-goals-sessions-percentage')%</h3>
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
                    <h4>@yield('recent-activity-1')</h4>
                    <div class="object">
                        <p></p>
                        <small class="text-muted">@yield('recent-activity-amount-1')</small>
                    </div>
                    <div class="time">
                        <p>@yield('recent-time-1')</p>
                        <small class="text-muted">23/5</small>
                    </div>
                    <div class="calories">
                        <h4 class="success">@yield('recent-calories-1') KCal</h4>
                        <small class="success"></small>
                    </div>
                </div>
                                        <!--===== ACTIVITY 2 =====-->
                <div class="activity">
                    <img src="https://cdn-icons-png.flaticon.com/512/4669/4669353.png">
                    <h4>@yield('recent-activity-2')</h4>
                    <div class="object">
                        <p></p>
                        <small class="text-muted">@yield('recent-activity-amount-2')</small>
                    </div>
                    <div class="time">
                        <p>@yield('recent-time-2')</p>
                        <small class="text-muted">23/5</small>
                    </div>
                    <div class="calories">
                        <h4>@yield('recent-calories-2') KCal</h4>
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