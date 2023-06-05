<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <!-- GOOGLE FONTS (POPPINS)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: url("https://images.squarespace-cdn.com/content/v1/54dba558e4b0d304c26d0782/1514564524691-JU9F404IHBNA9MLXNAAT/GranvilleCommercialPhotography-VO2Fitness-DiBlasioPhotography-63.jpg") no-repeat center center fixed;
            background-size: cover;
            color: #FFF;
            font-family: poppins, sans-serif;
            scroll-behavior: smooth;
        }

        .container {
            text-align: center;
            padding-top: 3.5rem;
        }

        h1 {
            font-size: 7rem;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .developer-section {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 8px;
        }

        .developer-card {
            width: 200px;
            margin: 20px;
        }
        

        .developer-card img {
            width: 100%;
            border-radius: 50%;
        }

        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            font-size: 18px;
            padding: 5px 10px;
            background-color: #FFF;
            color: #000;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-button:hover{
            background-color: #000;
            color: #FFF;
            transition: all 300ms ease;
        }
    </style>
    <script>
        // Menambahkan event listener pada saat halaman dimuat
        window.addEventListener('load', function() {
          // Menambahkan perilaku scrolling yang mulus pada saat menggulirkan halaman
          document.documentElement.style.scrollBehavior = 'smooth';
        });
      </script>
      
</head>
<body>
    <a class="back-button" href="/fitgo/{user}">&lt; Back</a>
    <div class="container">
        <h1>FITGO</h1>
        <p>Aplikasi Tracker nutrisi dan kalori</p>
        <h2 style="margin-top: 7rem;">TIM PENGEMBANG</h2>
        
        <div class="developer-section">
            <div class="developer-card pengembang">
                <img src="https://api.himatif.org/data/assets/foto/2020/140810200016.jpg" alt="Muhammad Daffa Alifiandi">
                <p>Muhammad Daffa Alifiandi</p>
                <p>140810200016</p>
            </div>
            <div class="developer-card pengembang">
                <img src="https://api.himatif.org/data/assets/foto/2020/140810200038.jpg" alt="Pujo Prayogo">
                <p>Pujo Prayogo</p>
                <p>140810200038</p>
            </div>
            <div class="developer-card pengembang">
                <img src="https://api.himatif.org/data/assets/foto/2020/140810200050.jpg" alt="Fikri Arkani Salim">
                <p>Fikri Arkani Salim</p>
                <p>140810200050</p>
            </div>
            <div class="developer-card pengembang">
                <img src="https://api.himatif.org/data/assets/foto/2020/140810200062.jpg" alt="Zahran Hanif Fathanmubin">
                <p>Zahran Hanif Fathanmubin</p>
                <p>140810200062</p>
            </div>
        </div>

        <h2 style="margin-top: 4rem;">PEMBIMBING</h2>
        <div class="developer-section">
            <div class="developer-card">
                <img src="https://kitchenhealth.vercel.app/assets/team/Akmal.png" alt="Pak Akmal S.Si.,MT.">
                <p>Pak Akmal S.Si.,MT.</p>
                <p>Dosen Pengampu</p>
            </div>
            <div class="developer-card">
                <img src="https://kitchenhealth.vercel.app/assets/team/dicky.jpg" alt="Dicky Rahma Hermawan">
                <p>Dicky Rahma Hermawan</p>
                <p>Asisten Praktikum</p>
            </div>
            <div class="developer-card">
                <img src="https://kitchenhealth.vercel.app/assets/team/ananda.jpg" alt="Ananda Miftakhul Syifa">
                <p>Ananda Miftakhul Syifa</p>
                <p>Asisten Praktikum</p>
            </div>
        </div>
        <h3 style="margin-bottom: 4rem; padding-top: 2rem;">©Fitgo 2023</h3>
    </div>
</body>
</html>
