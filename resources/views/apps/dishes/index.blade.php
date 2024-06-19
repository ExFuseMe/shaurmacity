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
        <div class="main">
            <div class="title"><h1>Меню</h1></div>
            <div class="dish-categories">
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/597b65fddb3a43f5a0ad14bea3ace0dd.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Мексика</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/64947d88a9a24138b21d914a38adedba.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Комбо-наборы</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/e882a6fafc964c8a8377c6932f488cf1.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Роллы</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/0b829e58cab341ed9e8a3bc090ac9c17.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Бургеры</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/88c86c94774d48099ca2ea10a1899f54.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Пицца</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/6659be1c17a145aabf80a366ccdb8c2b.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Гирос</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/d3566f49a1854518bcbe19a76fe852ad.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Сэндвичи</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/3936cc09bd0442288b8c4935869a7170.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Хот-доги</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/243129e1e3d14dd4aef74f54402ceaaa.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Вок и Рис</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/7a113c150d3744429e492c471be39703.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Супы</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/830309340a1d490ea7282ec37ea6c681.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Салаты</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/6ca47a155e3e4afeb5376a854841d399.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Шаурма</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/55067fd53b7743c18bdf96860f951756.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Закрытая пицца</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/f51f29c994614c54a662efc65a9d7ea9.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Шашлык</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/39e7f48f5fde4be4a4d9063a77c8bebf.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Горячие закуски</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/23c3c06eeb7e43bd9c6bc635f5c1b292.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Соусы</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/f88fa4d61eda499eaff84bff69f1dc64.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Напитки</p>
                    </div>
                </div>
                <div class="dish_category">
                    <div class="category-image">
                        <img
                            src="https://vsem-edu-oblako.ru/upload/store/merchant466/small/f8f72ec1969f4b7eba08072e1ee2e1c3.jpg?w=600&amp;h=450"
                            alt="Категория">
                    </div>
                    <div class="category-name">
                        <p>Десерты</p>
                    </div>
                </div>
            </div>
            <div class="categories">
                @foreach($dish_categories as $category)
                    <div class="category">
                        <div class="category_title"><h3>{{$category->name}}</h3></div>
                        <div class="category_products">
                            @foreach($category->dishes()->get() as $dish)
                                <div class="products_item">
                                    <div class="item_image">
                                        <img src="{{!is_null($dish->getFirstMedia('*')) ? $dish->getFirstMedia('*')->getUrl() : "https://vsem-edu-oblako.ru/upload/store/merchant466/small/9a41d2f3d9884fc794150accb54104d1.jpg?w=600&h=450"}}" alt="test">
                                    </div>
                                    <div class="item_content">
                                        <div class="content_title"><span><b>{{$dish->name}}</b></span></div>
                                        <div class="content_weight">{{$dish->weight}}г.</div>
                                        <div class="content_description">{{$dish->content}}</div>
                                        <div class="content_price">{{$dish->price}}₽</div>
                                    </div>
                                    <div class="item_actions">
                                        <div class="action-left">
                                            <button>Корзина</button>
                                        </div>
                                        <div class="action-right"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function () {
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
