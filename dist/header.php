<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="./css/main.css?version=<?= mt_rand() ?>">
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body class="body">
<div class="debug">
    <div>
        <div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<header class="wrapper-full">
    <div class="wrapper">
        <div class="wrap_first_line">

            <!-- Лого -->
            <div class="wrap_logo">
                <a href="#" class="logo_link">
                    <span class="wrap_img">
                        <img src="img/logo.png" alt="Красота">
                    </span>
                    <div class="logo_text">
                        <span class="small">beta</span>
                        <div class="normal">Красота</div>
                    </div>
                </a>

                <div class="logo_description">
                    Оборудование для индустрии красоты
                </div>
            </div>

            <div class="right_content">
                <!-- Почта -->
                <div class="mail">
                    <span class="icon_mail"></span>
                    <a href="mailto:info@krasota-spaset.ru" class="mail_adrress">info@krasota-spaset.ru</a>
                </div>

                <!-- Телефон -->
                <a href="tel:88002007080" class="phone_number">8&nbsp;800&nbsp;200-70-80</a>

                <!-- Кнопка -->
                <a href="#" class="btn_popup">Оставить заявку</a>
            </div>
        </div>
    </div>

    <div class="wrap_menu_full">
        <div class="wrapper height100">
            <!-- Меню -->
            <nav class="menu">

                <div class="sandwich__wrap">
                    <a href="#" class="sandwich__link"></a>
                    <ul class="sandwich__content display_none">
                        <li><a href="#">Меню aппараты для чего-то</a></li>
                        <li><a href="#">Меню item</a></li>
                        <li><a href="#">Меню пункт</a></li>
                        <li><a href="#">Меню </a></li>
                        <li><a href="#">Меню aппараты для чего-то</a></li>
                        <li><a href="#">Меню </a></li>
                        <li><a href="#">Меню aппараты для чего-то</a></li>
                        <li><a href="#">Меню </a></li>
                        <li><a href="#">Меню aппараты для чего-то</a></li>
                    </ul>
                </div>

                <ul class="main_menu">
                    <li><a href="#">Главная</a></li>
                    <li class="position_relative">
                        <a href="#" class="main_menu_under__link">
                            <span>Обзор</span>
                            <span class="angle_down"></span>
                        </a>
                        <ul class="under_main_menu display_none">
                            <li class="under_menu_li"><a href="#">Аппараты для лазерной эпиляции</a></li>
                            <li class="under_menu_li"><a href="#">Диодные лазеры</a></li>
                            <li class="under_menu_li"><a href="#">Александритовые лазеры</a></li>
                            <li class="under_menu_li"><a href="#">LPG-аппараты</a></li>
                            <li class="under_menu_li"><a href="#">Аппараты SMAS-лифтинга</a></li>
                            <li class="under_menu_li"><a href="#">Аппараты для криолиполиза</a></li>
                            <li class="under_menu_li"><a href="#">Аппараты для лазерной эпиляции</a></li>
                            <li class="under_menu_li"><a href="#">Диодные лазеры</a></li>
                            <li class="under_menu_li"><a href="#">Александритовые лазеры</a></li>
                            <li class="under_menu_li"><a href="#">LPG-аппараты</a></li>
                            <li class="under_menu_li"><a href="#">Аппараты SMAS-лифтинга</a></li>
                            <li class="under_menu_li"><a href="#">Аппараты для криолиполиза</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Рейтинги</a></li>
                    <li><a href="#">Процедуры</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>



<script>
  // Показать что под сэндвичем
  let sandwich__link = document.querySelector('.sandwich__link')
  sandwich__link.addEventListener('click', show_sandwich_content)
  function show_sandwich_content () {
    let sandwich__content = document.querySelector('.sandwich__content')
    sandwich__content.classList.toggle('display_none')
    sandwich__link.classList.toggle('sandwich_cross')
  }

  // Показать что в под меню
  let main_menu_under__link = document.querySelector('.main_menu_under__link')
  main_menu_under__link.addEventListener('click', under_main_menu)
  function under_main_menu (e) {
    let under_main_menu = document.querySelector('.under_main_menu')
    under_main_menu.classList.toggle('display_none')
    e.currentTarget.lastElementChild.classList.toggle('rotate')
  }

  // Закрыть все открытые SELECT
  /*document.onclick = function (e) {
   console.log(e.target.className);
   console.log(e.currentTarget.className);
   if (e.target.className !== 'sandwich__link') {
   let sandwich__content = document.querySelector('.sandwich__content')
   sandwich__content.classList.add('display_none')
   sandwich__link.classList.remove('sandwich_cross')
   }

   if (e.target.className !== 'main_menu_under__link') {
   let under_main_menu = document.querySelector('.under_main_menu')
   under_main_menu.classList.add('display_none')
   let angle_down = document.querySelector('.angle_down')
   angle_down.classList.remove('rotate')
   }
   }*/

</script>