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
    <link rel="stylesheet" href="{{ '/css/root-element.css' }}">
    <link rel="stylesheet" href="{{ '/css/sidebar-element.css' }}">
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
                             <a href={{"/fitgo/".$id}} class="active">
                                <span class="material-icons-outlined">home</span>
                            </a>
                            <a href={{"/fitgo/intake/".$id}}>
                                <span class="material-icons-outlined">fitness_center</span>
                            </a>
                            <a href={{"/fitgo/profile/".$id}} >
                                <span class="material-icons-outlined">person</span>
                            </a>
                            <!-- LOGOUT -->
                        <!-- <a href="#"></a> -->
                        <form action="/logout">
                        <button class="btn btn-light text-dark" >
                            <span class="material-icons-outlined">logout</span>
                        </button>
                        </form>
                    </aside>
                </div>
            </div>
        
                                <!--========== MIDDLE ==========-->
        <section class="middle">
            <nav>
                <div class="container">
                    <div class="profile-area">
                        <div class="greetings-title">
                            Welcome back,<span class="greetings-name" style="text-transform: capitalize">@yield('profile-name').</span>
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
                    <label for="show" class="show-btn">Update Intake</label>
                    <div class="update-container">
                        <label for="show" class="update-close-btn"><span class="material-icons-sharp">close</span></label>
                        <div class="text text">Update</div>
                        <form action="{token}" method='POST'>
                        @csrf
                            <div class="data">
                                <label for="update-activity" class="text-question">Food/drink name</label>
                                <input type="text" id="update-activity" name="activity_name">
                            </div>
                            <div class="data">
                                <label for="activity-amount" class="text-question">Amount (gr/ml):</label>
                                <input type="text" id="activity-amount" name="activity_amount"><br>
                            </div>  
                            <div class="data">
                                <label for="time" class="text-question">Time:</label>
                                <input type="time" id="time" name="time"><br>
                            </div>
                            <div class="data">
                                <label for="update-calorie" class="text-question">Calories</label>
                                <input type="text" id="kcal" name="kcal">
                            </div>
                            <div class="btn">
                                <div class="inner"></div>
                                <button type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="center">
                    <label class="show-btn" ><a href={{"/fitgo/weight-tracks/".$id}} class="text-light" style="text-decoration:none;">Weight Tracks</a></label>
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
                        <h1 style="font-size: 2.5rem;text-transform: capitalize;">@yield('target-workout')</h1>
                        
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
                        <h2>@yield('daily-intake-water') L</h2>
                        <h5>Water</h5>
                    </div>
                </div>

                <!-- BMI -->
                <div class="goal">
                    <div>
                        <h2>@yield('BMI')</h2>
                        <h5>BMI</h5>
                    </div>
                </div>
            </div>
            <div class="your-goals">
                <span class="material-icons-sharp" style="padding-top: 0.8rem; padding-left: 0.7rem">auto_awesome</span>
                <h2>Your Goals</h2>
                <!-- BADGE -->
                <div class="badge goals-card" style="width:100%">
                    <div class="goal">
                        <span class="material-icons-sharp" style="margin-right: 0.7rem">scale</span>
                        <h3 class="goal-title" style="font-size: calc(1.3rem + .6vw); text-align: center; flex: 1;">@yield('your-goals-weight-type') @yield('your-goals-weight-amount')</h3>
                    </div>
                </div>
            </div>

            <div class="your-goals" style="margin-top: 0.5rem;">
                <div class="badge" style="padding-bottom: 0px; margin-top: 0px;background: var(--color-purple); box-shadow: 0 0.5rem 1.5rem rgba( 0, 0, 0, 0.1);">
                    <div class="goal">
                        <h4 class="goal-title" style="font-size: 1.1rem; color: white; ">@yield('quote')<br>
                            
                    </div>
                </div>
            </div>




            </div>
        </section>
        <!--========== RIGHT ==========-->
        <section class="right">
                                    <!--========= RECENT ACTIVITIES ==========-->
            <div class="recent-activities" style="margin-top: 10%; height:100%">
                <div class="recent-header" style="width:auto;">
                    <h1><span class="material-icons-sharp">fastfood</span>  Recent Intake</h1>
                </div>
                <div class="recent-activity-top-divider"></div>
                                        <!--===== ACTIVITY 1 =====-->
                @foreach ($data_activity as $item)
                <div class="activity">
                    {{-- <img src="https://cdn.icon-icons.com/icons2/2796/PNG/512/drink_glass_icon_178118.png"> --}}
                    <h4>{{$item->activity_name}}</h4>
                    <div class="object">
                        <p></p>
                        <small class="text-muted">{{$item->activity_amount}}</small>
                    </div>
                    <div class="time">
                        <p>{{$item->time}}</p>
                    </div>
                    <div class="calories">
                        <h4 class="success">{{$item->kcal}} KCal</h4>
                        <small class="success"></small>
                    </div>
                    <div>
                        <form action="{{url('fitgo/'.$item->id)}}" 
                            method="post" 
                            onsubmit="return confirm('apakah yakin akan menghapus data?')"
                            class="d-inline">
                            @csrf
                            @method('delete')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                        </form>
                    </div>
                </div>  
                @endforeach
                
               
            </div>
        </section>
    </main>

    
</body>
</html>