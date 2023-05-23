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
        main {
            display: grid;
            width: 96%;
            margin: 1rem auto 4rem;
        }


        main aside{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 88vh;
            width: 4rem;
            background: var(--color-dark);
        }
        /* cuma di mobile*/
        main aside button#close-btn {
            display: none;
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
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
            transition: all 300ms ease;
            display: flex;
            justify-content: center;
        }

        main aside .sidebar a.active{
            background: var(--color-gray-light);
            color: var(--color-white);
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
            transition: all 150ms ease;
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

        .profile-area {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 4rem;
        }

        .profile-area .notifications {
            display: flex;
            background: var(--color-light);
            width: 5rem;
            height: 2rem;
            border-radius: var(--border-radius-2);
            cursor: pointer;
        }

        .profile-area .notifications button{
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
        }

        .profile-area .notifications .active{
            background: var(--color-dark);
            border-radius: var(--border-radius-2);
            color: var(--color-white);
        }

        .profile-area .profile {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .profile-area .profile-picture {
            display: block;
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            overflow: hidden;
        }

        .profile-area button{
            display: none;
        }

        .profile-area .notif-button .active {
            background: var(--color-dark);
            border-radius: var(--border-radius-2);
            color: var(--color-gray-dark);
        }


        /* SPECIAL FONTS */
        .greetings-name {
            font-size: 1.9rem;
            /* margin-left: 0.5rem; */
            padding-bottom: 0.4rem;
            color: var(--color-dark);
        }

        .greetings-title {
            padding: var(--padding-2) var(--card-padding);
            width: 36vw;
            border-radius: var(--border-radius-2);
            display: flex;
            align-items: center;
            color: var(--color-gray-light);
            position: absolute;
            left: 15%;
            margin-right: 2rem;
            /* margin-left: 2rem; */
        }



    </style>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 --></head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto bg-dark sticky-top" style="background-color: black; color: white;">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-dark align-items-center sticky-top">
                    <main>
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
                    
                    <!-- <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                        <i class="bi-bootstrap fs-1"><h6>FITGO</h6></i>
                    </a>
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-between w-100 px-3 align-items-center">
                        <li class="nav-item">
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                                <i class="bi-house fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <i class="bi-speedometer2 fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                                <i class="bi-table fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                                <i class="bi-heart fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                                <i class="bi-people fs-1"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-person-circle h2"></i>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="col-sm p-3 min-vh-100">
                <!-- content -->
                <!-- <h2>A glorious Bootstrap 5 icon sidebar menu!</h2>
                <hr />
                <h3>More content...</h3>
                <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>
                <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>
                <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>
                 -->
                 <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="row">
                            <div class="col-8">
                                <!-- <div class="greetings-title">
                                    Welcome back,<span class="greetings-name">Mamat.</span>
                                </div> -->
                                <p style="font-size: 20px;"><span style="font-weight: bold;font-size: 30px;">Hi Mamat,<br>Let's Get in Shape.</span></p>
                            
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-8">
                                        <div class="profile-area">
                                            <div class="profile">
                                                <div class="notification">
                                                    <a class="notif-button"><span class="material-icons-sharp">notifications</span></a>
                                                </div>
                                                <img  class="profile-picture" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"></div>
                            </div>
                            <div class="row" style="padding-top: 3%;">
                                <div class="col">
                                    <p style="font-weight: bold;font-size: 22px;">Upcoming Workout</p>
                                </div>
                                    <!-- <button>submit</button>
                                    <button href="register.html" class="button-rounded-black" style="text-decoration:none">Update</button>
                                 -->
                            </div>
                            <div class="row" style="padding-top: 3%;">
                                <div class="col-lg-6 col-md-12 col-sm-12 mb-3" >
                                    <div class="card" style="min-width: 100%;width: auto; min-height: 100%;background-color: black;border-radius:6px;" >
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <img src="https://media1.popsugar-assets.com/files/thumbor/oStCU38qB6hu1AHCJ5CyLBQ6TAY/fit-in/2048xorig/filters:format_auto-!!-:strip_icc-!!-/2019/02/27/986/n/1922729/6982a2275c7711f34ee2e8.35687035_/i/Why-Women-Work-Out.jpg" class="card-img" alt="..." style="height:100%;">
                                            </div>
                                            <div class="col-md-6" >
                                                <div class="card-body text-white" style="height:100%;">
                                                    <h5 class="card-title">Arms & Shoulder</h5>
                                                    <p class="card-text">6 Excercises</p>
                                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <div class="card" style="min-width: 100%;width: auto; min-height: 100%;background-image: url('https://wallaland.com/wp-content/uploads/wallpapers/art/illustration/Emoji/Wallaland%20Emoji%20Fire.jpg');border-radius:6px;background-position-y: 65%; background-position-x: 50%; background-size: cover;">
                                        <div class="row no-gutters my-auto">
                                            <div class="col-md-4 text-white my-auto mx-auto ">
                                                <p class="text-center my-auto">300</p>
                                            </div>
                                            <div class="col-md-8" >
                                                <div class="card-body text-white">
                                                    <h5 class="card-title my-auto">Calories Burned</h5>
                                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <div class="card-body">
                                                    <h1>300</h1>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">Calories Burned</h5>
                                                    <p class="card-text">6 Excercises</p> 
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p style="font-weight: bold;font-size: 22px;">Other Workout</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3" >
                                    <div class="card" style="min-width: 100%;width: auto; min-height: 100%;background-color: black;border-radius:6px;" >
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="card-body text-white">
                                                    <h5 class="card-title">Chest & <br> Triceps</h5>
                                                    <p class="card-text">6 Excercises</p>
                                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6" >
                                                <img src="https://i1.wp.com/lovekarmapassion.com/wp-content/uploads/2020/06/250063-1600x1067-exercising.jpg?fit=1600%2C1067&ssl=1" class="card-img" alt="..." style="height: 100%;object-fit: cover;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="card" style="min-width: 100%;width: auto; min-height: 100%;background-color: black;border-radius:6px;" >
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="card-body text-white">
                                                    <h5 class="card-title">Full <br>body</h5>
                                                    <p class="card-text">&nbsp;</p>
                                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6" >
                                                <img src="https://www.theindustry.fashion/wp-content/uploads/2023/02/David-B-Gymshark1.jpg" class="card-img" alt="..." style="object-fit: cover;height: 100%;min-height: 118px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 mb-3" >
                                    <div class="card" style="min-width: 100%;width: auto; min-height: 100%;background-color: black;border-radius:6px;" >
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="card-body text-white">
                                                    <h5 class="card-title">&nbsp;<br>Legs</h5>
                                                    <p class="card-text">&nbsp;</p>
                                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6" >
                                                <img src="https://blogscdn.thehut.net/app/uploads/sites/478/2015/12/shutterstock_1185036889-3-min_1637338671.jpg" class="card-img" alt="..." style="object-fit: cover;height: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="card" style="min-width: 100%;width: auto; min-height: 100%;background-color: black;border-radius:6px;" >
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="card-body text-white">
                                                    <h5 class="card-title">Back &<br> Biceps</h5>
                                                    <p class="card-text">&nbsp;</p>
                                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6" >
                                                <img src="https://www.shape.com/thmb/O1oRN3A8IGIQjMRatW5gnAYHd5E=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/resistance-band-exercises-for-back-promo-d2f13ed8527549679f2fb7b4bddcd5b4.jpg" class="card-img" alt="..." style="object-fit: cover;max-height: 112px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="row">
                            <div class="col">
                                <span class="greetings-name">Today Nutrition Intake</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="card" style="min-width: 100%;width: auto; min-height: 100%;background-color: black;border-radius:6px;" >
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
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="card" style="min-width: 100%;width: auto; min-height: 100%;background-color: black;border-radius:6px;" >
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <div class="card-body text-white" style="height:100%">
                                                <h5 class="card-title">Breakfast</h5>
                                                <p class="card-text">Bubur Ayam</p>
                                                <a href="#" class="button-rounded3" style="text-decoration:none">View more</a>
                                                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                            </div>
                                        </div>
                                        <div class="col-6" >
                                            <img src="https://img.freepik.com/free-photo/healthy-breakfast-table_144627-43540.jpg?w=2000" class="card-img" alt="..." style="height: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3" >
                            <div class="col">
                                <div class="card" style="min-width: 100%;width: auto; min-height: 100%;background-color: black;border-radius:6px;" >
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <div class="card-body text-white" style="height:100%">
                                                <h5 class="card-title">Dinner</h5>
                                                <p class="card-text">Chicken Pasta</p>
                                                <a href="#" class="button-rounded3" style="text-decoration:none;">View more</a>
                                                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                            </div>
                                        </div>
                                        <div class="col-6" >
                                            <img src="https://images.squarespace-cdn.com/content/v1/5be122d8f8370ab91d93d1c3/1666561374013-0YCQSNM24VPJV0C835VS/Dinner20222173.jpg" class="card-img" alt="..." style="height: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="card" style="min-width: 100%;width: auto; min-height: 100%;background-color: black;border-radius:6px;" >
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <div class="card-body text-white">
                                                <h5 class="card-title">Lunch</h5>
                                                <p class="card-text">Grilled</p>
                                                <a href="#" class="button-rounded3" style="text-decoration:none">View more</a>
                                                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                            </div>
                                        </div>
                                        <div class="col-6" >
                                            <img src="https://www.realsimple.com/thmb/rwSxx97nZcOoBb-dZ1ouGqSn-Q4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/gut-healthy-lunch-GettyImages-1042075090-b21164b3fffe49af8868078e224a3e79.jpg" class="card-img" alt="..." style="height: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</body>
</html>
  
