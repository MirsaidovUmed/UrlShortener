<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{url('welcome')}}">Home</a></li>
                <li><a href="{{url('about')}}">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="{{url('mylink')}}">My links</a></li>
                <li><a href="{{route('login')}}">Login </a></li>
                <li class="register"><a href="{{route('register')}}">Register</a></li>
            </ul>
        </nav>
    </header>
    <div class="forSecond">
        <div class="second">
            <h1 class="slide1">All our effors are only gor the sake of our <span>clients</span></h1><br>
            <h1 class="slide2">We create a very beatiful <span>design</span> for you</h1><br>
            <h1 class="slide3">Creation of so <span>interactive</span> websites</h1><br>
            <h1 class="slide4"><span>Cooperate</span> with us without doubt</h1><br><br><br>
            <button class="one1">Connect with us</button>
            <button class="two2">More information</button>
        </div>
    </div>
</body>
</html>
