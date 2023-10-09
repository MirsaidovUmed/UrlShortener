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
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">My links</a></li>
                <li><a href="{{route('login')}}">Login </a></li>
                <li class="register"><a href="{{route('register')}}">Register</a></li>
            </ul>
        </nav>
    </header>
    <section>
        @if (session('success_message'))
            {!! session('success_message') !!}
        @endif
        <form method="POST" id="registration-form" action="{{route('short.url')}}">
            @csrf
            <div class="conteiner">
                <div class="box">
                    <div class="content1">
                        <input type="url" placeholder="Insert your link..." class="input" id="original_link">
                        <button id="generate">Shorten</button>
                    </div>
                    @error('original_url')
                    <span class="text-red-400 m-2 p-2">{{$message}}</span>
                    @enderror
                    <div class="content2">
                        <input type="text" class="input" id="shorten_link">
                        <button id="copy">Copy</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <script src="../js/main.js"></script>
</body>
</html>
