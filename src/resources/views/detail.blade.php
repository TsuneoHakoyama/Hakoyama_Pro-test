<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-detail</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

</head>

<body>
    <div class="main-content">
        <div class="main-board">
            <div class="shop-detail">
                <div class="header__wrapper-title">
                    <div class="title-logo">
                        <button class="burger" id="burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <div class="logo">
                        <a href="#">Rese</a>
                    </div>
                    <nav class="menu" id="menu">
                        <ul>
                            <li><a href="{{ route('root') }}">Home</a></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                            <li><a href="{{ '/mypage' }}">Mypage</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="shop-info">
                    <div class="back-btn">
                        <a href="{{ route('root') }}">&lt;</a>
                    </div>
                    <div class="shop-name">
                        <p>{{ $shop->name }}</p>
                    </div>
                </div>
                <div class="shop-card">
                    <div class="shop-image">
                        <img src="{{ $shop->image }}" alt="店舗画像">
                    </div>
                    <div class="shop-tag">
                        <div class="area-tag">#{{ $shop->prefectures->name }}</div>
                        <div class="genre-tag">#{{ $shop->genres->name }}</div>
                    </div>
                    <div class="introduction">
                        <p>{{ $shop->description }}</p>
                    </div>
                </div>
            </div>

            <div class="booking-form">
                <div class="title">
                    <p>予約</p>
                </div>
                <form action="/booking" method="post">
                    @csrf
                    <div class="input-form">
                        <div class="input-hidden">
                            <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                        </div>
                        <div class="input__date">
                            <input type="date" name="date" id="date-input" min="{{ $today }}" value="{{ $today }}">
                        </div>
                        <div class="error-message">
                            @if($errors->has('date'))
                            {{ $errors->first('date') }}
                            @endif
                        </div>
                        <div class="input__time">
                            <select name="time" id="time-input">
                                <option value="">時刻を選択してください</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                            </select>
                        </div>
                        <div>
                            @if($errors->has('time'))
                            {{ $errors->first('time') }}
                            @endif
                        </div>
                        <div class="input__number">
                            <select name="number" id="number-input">
                                <option value="">人数を選択してください</option>
                                <option value="1">1人</option>
                                <option value="2">2人</option>
                                <option value="3">3人</option>
                                <option value="4">4人</option>
                                <option value="5">5人</option>
                            </select>
                        </div>
                        <div>
                            @if($errors->has('people'))
                            {{ $errors->first('people') }}
                            @endif
                        </div>
                    </div>
                    <div class="confirm-window">
                        <table class="description">
                            <tr>
                                <th>Shop</th>
                                <td>{{ $shop->name }}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>
                                    <div id="date-confirm"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <td>
                                    <div id="time-confirm"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>Number</th>
                                <td>
                                    <div id="number-confirm"></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="submit-btn">
                        <button type="submit">予約する</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/hamburger.js') }}"></script>
    <script src="{{ asset('js/confirm.js') }}"></script>
</body>

</html>