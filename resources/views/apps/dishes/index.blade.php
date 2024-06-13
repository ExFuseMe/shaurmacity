<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Шаурма Сити</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <header>
            <div class="header_top">
                <div class="logo">
                    <a href="{{route('dishes.index')}}"><img src="{{asset('storage/logo.webp')}}" height="80"
                                                             width="80"></a>
                </div>
                <div class="geo_button">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             viewBox="0 0 16 16" class="bi bi-geo-alt-fill">
                            <path
                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                        </svg>
                        Укажите ваш адрес
                    </button>
                </div>
                <nav>
                    <ul class="nav_row">
                        <li><a href="#">Акции</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Реквизиты</a></li>
                        <li><a href="#">Доставка и оплата</a></li>
                    </ul>
                    <ul class="nav_row">
                        <li><a href="#">Франшиза</a></li>
                        <li><a href="#">Вакансии</a></li>
                        <li><a href="#">Бонусная система</a></li>
                    </ul>
                </nav>
                <div class="header_phone">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             viewBox="0 0 16 16" class="bi bi-telephone">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                        </svg>
                        8 (8552) 200-201</a>
                </div>
                <div class="login">
                    <button>Войти</button>
                </div>
            </div>
            <div class="header_bottom">
                <div class="menu">
                    <nav>
                        <ul class="nav_row">
                            <li><a href="#">Мексика</a></li>
                            <li><a href="#">Комбо-наборы</a></li>
                            <li><a href="#">Роллы</a></li>
                            <li><a href="#">Бургеры</a></li>
                            <li><a href="#">Пицца</a></li>
                            <li><a href="#">Гирос</a></li>
                            <li><a href="#">Сэндвичи</a></li>
                            <li><a href="#">Хот-доги</a></li>


                        </ul>
                    </nav>
                    <div class="chocolate">
                        <ul class="drop-down">
                            <svg data-v-7dcde39a="" width="24" height="24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 class="cursor-pointer header-dropdown-show transition-colors duration-200">
                                <path data-v-7dcde39a=""
                                      d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"
                                      fill="currentColor"></path>
                            </svg>
                        </ul>
                    </div>
                </div>
                <div class="cart">
                    <button>Корзина</button>
                </div>

            </div>

        </header>
        <div class="slider">
            <div><img src="{{asset('storage/img1.webp')}}" alt="Slide 1"></div>
            <div><img src="{{asset('storage/img2.webp')}}" alt="Slide 2"></div>
            <div><img src="{{asset('storage/img3.webp')}}" alt="Slide 3"></div>
            <!-- Add more slides as needed -->
        </div>
    </div>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>

</html>
