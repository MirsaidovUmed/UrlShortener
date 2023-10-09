<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./welcome.blade.php">
</head>
<body>
    <style>
        body
        {
            background-color: grey;
        }
    </style>
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
            <div class="form-container">
        <form id="link-form">
            <div class="one">
                <label for="original-link">Original Link:</label>
                <input type="text" class="perviy" id="original-link" name="original-link">
            </div>
            <div class="two">
                <label for="shorten-link">Shortened Link:</label>
                <input type="text" class="vtoroy" id="shorten-link" name="shorten-link">
            </div>
            <button type="submit">Save Link</button>
        </form>
    </div>
    <script src="../js/main.js"></script>
</body>
</html>
