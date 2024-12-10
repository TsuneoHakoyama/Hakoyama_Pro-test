<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

</head>

<body>
    <main class="main">
        <!-- Menu-button and title-logo -->
        <div class="title-logo">
            <button class="burger" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="logo">
                <a href="#">Rese</a>
            </div>
        </div>
        <nav class="menu" id="menu">
            <ul>
                <li><a href="{{ route('shop-all') }}">Home</a></li>
                <li><a href="{{ route('register') }}">Registration</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav>

        <!-- Login window -->
        <div class="login-window">
            <div class="title-area">
                <p>Login</p>
            </div>
            <div class="content">
                <form action="/login" method="post">
                    @csrf
                    <div class="input-form">
                        <div class="input__email">
                            <i class="fa-solid fa-envelope"></i>
                            <input class="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                        </div>
                        <div class="error-message">
                            @if($errors->has('email'))
                            {{ $errors->first('email') }}
                            @endif
                        </div>
                        <div class="input__password">
                            <i class="fa-solid fa-lock"></i>
                            <input class="password" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="error-message">
                            @if($errors->has('password'))
                            {{ $errors->first('password') }}
                            @endif
                        </div>
                    </div>
                    <div class="submit-button">
                        <button class="login-btn" type="submit">ログイン</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/hamburger.js') }}"></script>
    <script src="{{ asset('js/confirm.js') }}"></script>
</body>

</html>