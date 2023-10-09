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
                <li><a href="{{route('login')}}">Log in</a></li>
                <li class="register"><a href="{{route('register')}}">Register</a></li>
            </ul>
        </nav>
    </header>
    <div class="conteiner">
        <div class="box">
            <div class="content1">
                <input type="url" placeholder="Insert your link..." class="input" id="original_link">
                <button id="generate">Shorten</button>
            </div>
            <div class="content2">
                <input type="text" class="input" id="shorten_link">
                <button id="copy">Copy</button>
            </div>
        </div>
    </div>
    <!--<dialog class="modal1">
        <div class="container">
            <form class="formRegister" id="registration-form" action="#">
                <h2 class="abc">Registration Form</h2>

                <div class="form-group">
                    <label class="labelho" for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label class="labelho" for="surname">Surname</label>
                    <input type="text" id="surname" name="surname" required>
                </div>

                <div class="form-group">
                    <label class="labelho" for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label class="labelho" for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label class="labelho" for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>

                <div class="form-group">
                    <button type="submit">Register</button>
                    <button class="close">Close</button>
                </div>
            </form>
        </div>
    </dialog>-->

    <script src="../js/main.js"></script>
    </body>
    </html>
