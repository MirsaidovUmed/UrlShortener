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
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./about.html">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="./mylink.blade.php">My links</a></li>
                <li><a href="">Log in </a></li>
                    <li class="register"><a href="#">Register</a></li>
                </ul>>
                </nav>
            </header>
            <div class="form-container">
        <form id="link-form" method="POST" action="{{route('short.url')}}">
            @if (session('success_message'))
                {!! session('success_message') !!}
            @endif
                @csrf
                <div class="one">
                    <label for="original-link">Original Link:</label>
                    <input type="text" class="perviy" id="original-link" name="original-link">
                </div>
                @error('original_url')
                <span class="text-red-400 m-2 p-2">{{$message}}</span>
                @enderror
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
