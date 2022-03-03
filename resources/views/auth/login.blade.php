<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/assets/personal/app.css') }}" rel="stylesheet">

    <title>Videoclub</title>
</head>

<body>



    <div class="wrapper">

        <div class="logo"> <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt=""> </div>
        <div class="text-center mt-4 name"> Twitter </div>
        <form class="p-3 mt-3" method="POST" action="">

            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input value="dzambrano863@gmail.com" type="email" name="email" id="email" placeholder="email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input value="cristina98" type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <p class=""></p>
            <button type="submit" class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="#">Sign up</a> </div>

    </div>
    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>