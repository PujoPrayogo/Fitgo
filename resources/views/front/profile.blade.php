<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <!-- GOOGLE FONTS (POPPINS)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }

        .profile-picture {
            margin-top: 50px;
        }

        .username {
            font-size: 24px;
            margin-top: 10px;
        }

        .info {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .info-item {
            margin: 0 20px;
        }

        .logout-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-picture">
            <a href="@yield('profile-picture')">
                <img src="@yield('profile-picture')" alt="Profile Picture" width="200">
            </a>
        </div>
        <div class="username">
            @yield('username')
        </div>
        <div class="info">
            <div class="info-item">
                Weight<br>
                @yield('weight') KG
            </div>
            <div class="info-item">
                Height<br>
                @yield('height') CM
            </div>
            <div class="info-item">
                BMI<br>
                @yield('bmi')
            </div>
        </div>
        <div class="info">
            <div class="info-item">
                Age<br>
                @yield('age')
            </div>
            <div class="info-item">
                Bodygoals<br>
                @yield('bodygoal')
            </div>
        </div>
        <div class="logout-button">
            <button>Logout</button>
        </div>
    </div>
</body>
</html>
