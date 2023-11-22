<!DOCTYPE html>
<html lang="en">
    @include('components/header')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link rel="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
<body>
    <div class="profile"></div>
    @include('components/navbar')
    <header>
        <nav>
            <a href="#" class="active">Home</a>
            <a href="aboutme.html">About Me</a>
            <a href="#">Contact</a>
        </nav>
    </header>
    <div class="text-box">
        <h1> Hi! I'm Mikaela Tayag</h1>
        <h1>
            <span class="info"></span>
        </h1>
        <p>Welcome to My Personal Space!

        Hello there! This space is dedicated to sharing a bit more about who I am, my interests, and the things that make me unique. 
        Feel free to explore and get to know me a little better. 
        </p>
    <div class="icon-box">
        <i class='bx bxl-facebook'></i>
        <i class='bx bxl-instagram'></i>
        <i class='bx bxl-twitter'></i>
    </div>
    <div class="img-box">
        <img src="" draggable="false" alt="">
    </div>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="script.js"></script>
    
</body>
</html>