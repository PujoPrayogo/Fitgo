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
    <link rel="stylesheet" href="{{ '/css/profile-dashboard.css' }}">
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
                             <a href={{"/fitgo/".$id}} >
                                <span class="material-icons-outlined">home</span>
                            </a>
                            <a href={{"/fitgo/intake/".$id}}>
                                <span class="material-icons-outlined">fitness_center</span>
                            </a>
                            <a href={{"/fitgo/profile/".$id}} class="active">
                                <span class="material-icons-outlined">person</span>
                            </a>
                            <form action="/logout">
                            <button class="btn btn-light text-dark">
                                <span class="material-icons-outlined">logout</span>
                            </button>
                            </form>
                    </aside>
                </div>
            </div>
        
                                <!--========== MIDDLE ==========-->
        <section class="middle">
                                    <!--===== TODAYS TARGET =====--> 
            <div class="todays-target">
                    <h1 style="font-size: 9.5rem;">About User<label for="show" class="show-btn">Update</label></h1>
                                                                <!-- ===== UPDATE USER FORM ===== -->
                <input type="checkbox" id="show">
                
                <div class="update-container">
                        <label for="show" class="update-close-btn"><span class="material-icons-sharp">close</span></label>
                        <div class="text text">Account Update</div>
                        <form action={{'/fitgo/profile/update/'.$id}} method='post'>
                        @csrf
                        @method('put')
                            <div class="data">          <!--  WEIGHT  -->
                                <label for="update-weight" class="text-question">Weight</label>
                                <input type="text" id="update-weight" name="weight">
                            </div>
                            <div class="data">          <!--  USERNAME  -->
                                <label for="update-username" class="text-question" style="color: var(--color-purple);">Username</label>
                                <input type="text" id="update-username" name="username">
                            </div>
                            <div class="data">          <!--  AGE  -->
                                <label for="update-age" class="text-question" style="color: var(--color-success);">Age</label>
                                <input type="text" id="update-age" name="age"><br>
                            </div>  
                            <div class="data">          <!--  HEIGHT  -->
                                <label for="update-height" class="text-question" style="color: var(--color-danger);">Height</label>
                                <input type="text" id="update-height" name="height">
                            </div>
                            <div class="btn">
                                <div class="inner"></div>
                                <button type="submit">Update</button>
                            </div>
                        </form>
                    </div>
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
                        <h2>@yield('height')</h2>
                        <h5>Height</h5>
                    </div>
                </div>
            </div>
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
                                <canvas id="chart"> </canvas>              
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }

        const chart = document.querySelector("#chart").getContext('2d');

        var data = @json($data_weight)

        var data_weight = []

        for (var i = 0; i < 7; i++) {
            if(!data.hasOwnProperty(i)){
                data_weight[i] = 0;
            }else{
                data_weight[i] = data[i]['weight_atm'];
            }
        }

        

        
    
        // CREATE NEW CHART INSTANCE
        new Chart(chart, {
            type: 'line',
            data: {
                labels: ['-6', '-5', '-4', '-3', '-2', 'Last', 'Current'],
                datasets: [
                    {
                        label: 'Weight',
                        // data: [data[6]['weight_atm'], data[5]['weight_atm'], data[4]['weight_atm'], data[3]['weight_atm'], data[2]['weight_atm'], data[1]['weight_atm'], data[0]['weight_atm']],
                        data: [data_weight[6], data_weight[5], data_weight[4], data_weight[3], data_weight[2], data_weight[1], data_weight[0]],
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