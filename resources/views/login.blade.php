<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style_login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>
    <div class="wrapper">
        <div class="card">
            <h3>Cukimay</h3>
            <form action="{{ route('action-login') }}" method="post">
                @csrf
                <div class="row">
                    <input type="email" class="input-login" placeholder="Masukkan Email Brooh" name="email" required>
                </div>
                <div class="row">
                    <input type="password" class="input-login" placeholder="Masukkan Password Brooh" name="password" required>
                </div>
                <div class="row">
                    <input type="submit" class="btn-login" value="Masuk">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
