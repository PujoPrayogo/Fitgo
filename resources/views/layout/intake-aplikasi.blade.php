<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intake</title>
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
    <link rel="stylesheet" href="{{ '/css/intake-dashboard.css' }}">
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
                        <a href="/fitgo/{user}">
                            <span class="material-icons-outlined">home</span>
                        </a>
                        <a href="/fitgo/intake/{user}" class="active">
                            <span class="material-icons-outlined">fitness_center</span>
                        </a>
                        <a href="/fitgo/profile/{id}">
                            <span class="material-icons-outlined">person</span>
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
                            Hi,<span class="greetings-name">@yield('profile-name').</span> &nbsp; Let's get in shape.
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
            <div class="todays-target" style="margin-top: 3rem;">
                <h1>Workout Menu</h1>
                
            </div>
            <!--========== UPDATE FORM ==========-->

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
                              <td>5. <a href="https://www.tiktok.com/@petermiljak/video/7222056950404549893?q=cara%20rear%20delts%20fly&t=1685225619939">Rear Delts Fly</a></td>
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
                            <h1 class="text-center my-auto">@yield('calories-burned')</h1>
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

            <!--===== Breakfast =====-->
            <div class="center">
                <input type="checkbox" id="show4">
                <label for="show4" class="show-btn">
                    <div class="cardpy-2 my-2" style="min-width: 100%;width: auto; background-color: black;border-radius:6px;" >
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="card-body text-white">
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
                    <label for="show4" class="update-close-btn"><span class="material-icons-sharp">close</span></label>
                    <div class="text text" style="font-size: 2rem">Breakfast</div>
                    <!-- div class="text text" style="font-size: 15px;">Bubur Ayam</div> -->
                    <select name="membership" id="membership" style="width: 100%; height: 20px;">
                        <option value="grilled" selected name="grilled" class="text-center">Grilled</option>
                        <option value="salad-sandwich" name="salad-sandwich" class="text-center">Salad Sandwhich</option>
                      </select>
                    <form action="#">
                        <div class="data text-center" style="margin-bottom: 20px;">
                            <img src="https://img.freepik.com/free-photo/healthy-breakfast-table_144627-43540.jpg?w=2000" style="height: 100px; width: auto;"><img src="" alt="">
                            <h3 class="text text" style="font-size: 1rem; margin-top: 1rem;">Calories : 220KCal</h3>
                            <h3 class="text text" style="font-size: 1rem; margin-top: 1rem;">Protein  : 10gr</h3>
                        </div>
                        <div class="btn" style="margin-top: 0px;">
                            <div class="inner"></div>
                            <a href="https://cookpad.com/id/resep/16813402-creamy-tomato-chicken-pasta?ref=search&search_term=creamy%20chicken%20pasta">RECIPE</a>
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
                    <div class="text text">Lunch</div>
                    <!-- div class="text text" style="font-size: 15px;">Bubur Ayam</div> -->
                    <select name="membership" id="membership" style="width: 100%; height: 20px;">
                        <option value="grilled" selected name="grilled" class="text-center">Grilled</option>
                        <option value="salad-sandwich" name="salad-sandwich" class="text-center">Salad Sandwhich</option>
                      </select>
                    <form action="#">
                        <div class="data text-center" style="margin-bottom: 20px;">
                            <img src="https://www.realsimple.com/thmb/rwSxx97nZcOoBb-dZ1ouGqSn-Q4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/gut-healthy-lunch-GettyImages-1042075090-b21164b3fffe49af8868078e224a3e79.jpg" style="height: 100px; width: auto;"><img src="" alt="">
                            <h3 class="text text" style="font-size: 1rem; margin-top: 1rem;">Calories : 220KCal</h3>
                            <h3 class="text text" style="font-size: 1rem; margin-top: 1rem;">Protein  : 10gr</h3>
                        </div>
                        <div class="btn" style="margin-top: 0px;">
                            <div class="inner"></div>
                            <a href="https://cookpad.com/id/resep/16813402-creamy-tomato-chicken-pasta?ref=search&search_term=creamy%20chicken%20pasta">RECIPE</a>
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
                    <div class="text text">Dinner</div>
                    <!-- div class="text text" style="font-size: 15px;">Bubur Ayam</div> -->
                    <select name="membership" id="membership" style="width: 100%; height: 20px;">
                        <option value="chicken-pasta" selected name="chicken-pasta" class="text-center">Chicken Pasta</option>
                        <option value="quinoa-bowl" name="quinoa-bowl" class="text-center">Quinoa Bowl</option>
                      </select>
                    <form action="#">
                        <div class="data text-center" style="margin-bottom: 20px;">
                            <img src="https://images.squarespace-cdn.com/content/v1/5be122d8f8370ab91d93d1c3/1666561374013-0YCQSNM24VPJV0C835VS/Dinner20222173.jpg" style="height: 100px; width: auto;"><img src="" alt="">
                            <h3 class="text text" style="font-size: 1rem; margin-top: 1rem;">Calories : 220KCal</h3>
                            <h3 class="text text" style="font-size: 1rem; margin-top: 1rem;">Protein  : 10gr</h3>
                        </div>
                        <div class="btn" style="margin-top: 0px;">
                            <div class="inner"></div>
                            <a href="https://cookpad.com/id/resep/16813402-creamy-tomato-chicken-pasta?ref=search&search_term=creamy%20chicken%20pasta">RECIPE</a>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </main>
    
     <script>
    </script>
</body>
</html>