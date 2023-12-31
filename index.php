<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VNET</title>
    <link rel="stylesheet" href="./style/style.css">
    <script src="./js/script.js"></script>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
  />
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

</head>
<body>
    <header>
        <div class="container">
            <div class="header">
                <img class="logo" src="./images/vnet-logo-mono.svg">
                <nav class="header_nav">
                    <ul>
                        <li class="header_nav_item">
                            <a href="#">
                                ИНТЕРНЕТ И IPTV
                            </a>
                        </li>
                        <li class="header_nav_item">
                            <a href="#">
                                ОБОРУДОВАНИЕ И УСЛУГИ
                            </a>
                        </li>
                        <li class="header_nav_item">
                            <a href="#">
                                НАСТРОЙКИ
                            </a>
                        </li>
                        <li class="header_nav_item">
                            <a href="#">
                                ОПЛАТА
                            </a>
                        </li>
                        <li class="header_nav_item">
                            <a href="#">
                                НОВОСТИ
                            </a>
                        </li>
                        <div class="drop_dots_menu">
                            <button onclick="SubMenu('threeDots')" class="dropbtn1">
                                &#8942;
                            </button>
                            <div id="threeDots" class="dropdown_dots_content">
                                <a href="#">
                                    ОПЛАТА
                                </a>
                                <a href="#">
                                    НОВОСТИ
                                </a>
                                <a href="#">
                                    КОНТАКТЫ
                                </a>
                                <a href="#">
                                    РАБОТА В VNET
                                </a>
                                <a href="#">
                                    О НАС
                                </a>
                            </div>
                        </div>
                        <div class="drop_communication_menu">
                            <button onclick="SubMenu('communication')" class="dropbtn2">
                                <img class="communication-images" src="./images/communication-bubble-chat-comments-conversation-message-icon-svgrepo-com.svg">
                                <span>Связаться с нами</span>
                            </button>
                            <div id="communication" class="dropdown_communication_content">
                                <a href="tel:+7(949)333-31-12">
                                    +7(949)333-31-12
                                </a>
                                <a href="https://t.me/Office_Vnet_manager" target="_blank">
                                    Telegram
                                </a>
                                <a href="https://t.me/VNet_chat_bot" target="_blank">
                                    Telegram Bot
                                </a>
                            </div>
                        </div>
                        <button onclick="location.href='./pages/authorizations.html'" class="authorizationBtn">
                            <img class="login-images" src="./images/login-svgrepo-com.svg">
                            <span>ВОЙТИ</span>
                        </button>
                        <div class="drop_menu_menu">
                            <button onclick="SubMenu('menu')" class="dropbtn4">
                                <img class="menu-images" src="./images/menu-burger-svgrepo-com.svg">
                                <span>МЕНЮ</span>
                                <div id="menu" class="dropdown_menu_content">
                                    <a href="#">
                                        ИНТЕРНЕТ И IPTV
                                    </a>
                                    <a href="#">
                                        ОБОРУДОВАНИЕ И УСЛУГИ
                                    </a>
                                    <a href="#">
                                        НАСТРОЙКИ
                                    </a>
                                    <a href="#">
                                        ОПЛАТА
                                    </a>
                                    <a href="#">
                                        НОВОСТИ
                                    </a>
                                    <a href="#">
                                        КОНТАКТЫ
                                    </a>
                                    <a href="#">
                                        РАБОТА В VNET
                                    </a>
                                    <a href="#">
                                        О НАС
                                    </a>
                                </div>
                            </button>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="banner">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="text-swiper-slide">
                            <h2 class="text-swiper-slide-title">
                                НОВЫЙ СПОСОБ ОПЛАТЫ
                            </h2>
                            <p>
                                ОПЛАЧИВАЙТЕ ИНТЕРНЕТ УСЛУГИ <br> НЕ ВЫХОДЯ ИЗ ДОМА
                            </p>
                            <div class="more">
                                <span>ПОДРОБНЕЕ</span>
                                <span>></span>
                            </div>
                        </div>
                        <img src="./images/banner1.png">
                        <a href="#"> <span class="link"></span></a>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-swiper-slide">
                            <h2 class="text-swiper-slide-title">
                                НОВЫЙ СПОСОБ ОПЛАТЫ
                            </h2>
                            <p>
                                ОПЛАЧИВАЙТЕ ИНТЕРНЕТ УСЛУГИ <br> НЕ ВЫХОДЯ ИЗ ДОМА
                            </p>
                            <div class="more">
                                <span>ПОДРОБНЕЕ</span>
                                <span>></span>
                            </div>
                        </div>
                        <img src="./images/banner1.png">
                        <a href="#"> <span class="link"></span></a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="tariffs">
            <div class="tariff-title">
                ТАРИФЫ
            </div>
            <div class="tariff-type">
                <ul>
                    <li class="tariff-type-item">
                        <a href="#">
                            ИНТЕРНЕТ И IPTV
                        </a>
                    </li>
                    <li class="tariff-type-item">
                        <a href="#">
                            ОБОРУДОВАНИЕ И УСЛУГИ
                        </a>
                    </li>
                </ul>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-slide-tariff">
                            <div class="text-swiper-slide">
                                <h3 class="text-swiper-slide-title">
                                    "КЛАССИЧЕСКИЙ"
                                </h3>
                                <div class="text-swiper-slide-tariff-info">
                                    <img src="./images/internet-speed-meter-lite-svgrepo-com.svg"><span>20 Мбит/с</span>
                                </div>
                                <div class="text-swiper-slide-tariff-info">
                                    <img src="./images/tv-mode-svgrepo-com.svg"><span>300+ каналов</span>
                                </div>
                                <div class="text-swiper-slide-tariff-info">
                                    <img src="./images/hd-svgrepo-com.svg" width="20px"><span>HD качество</span>
                                </div>
                                <h3 class="text-swiper-slide-price">
                                    200&#8381; 
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide-tariff">
                            <div class="text-swiper-slide">
                                <h3 class="text-swiper-slide-title">
                                    "СТИЛЬНЫЙ"
                                </h3>
                                <div class="text-swiper-slide-tariff-info">
                                    <img src="./images/internet-speed-meter-lite-svgrepo-com.svg"><span>60 Мбит/с</span>
                                </div>
                                <div class="text-swiper-slide-tariff-info">
                                    <img src="./images/tv-mode-svgrepo-com.svg"><span>300+ каналов</span>
                                </div>
                                <div class="text-swiper-slide-tariff-info">
                                    <img src="./images/hd-svgrepo-com.svg" width="20px"><span>HD качество</span>
                                </div>
                                <h3 class="text-swiper-slide-price">
                                    250&#8381; 
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide-tariff">
                            <div class="text-swiper-slide">
                                <h3 class="text-swiper-slide-title">
                                    "ПРОРЫВ"
                                </h3>
                                <div class="text-swiper-slide-tariff-info">
                                    <img src="./images/internet-speed-meter-lite-svgrepo-com.svg"><span>100 Мбит/с</span>
                                </div>
                                <div class="text-swiper-slide-tariff-info">
                                    <img src="./images/tv-mode-svgrepo-com.svg"><span>300+ каналов</span>
                                </div>
                                <div class="text-swiper-slide-tariff-info">
                                    <img src="./images/hd-svgrepo-com.svg" width="20px"><span>HD качество</span>
                                </div>
                                <h3 class="text-swiper-slide-price">
                                    350&#8381; 
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="pluses">
            <div class="plus-title">
                НАШИ ПРЕИМУЩЕСТВА
            </div>
            <div class="plus">
                <div class="plus-conteiner">
                    <ul>
                        <il>
                            <div class="plus-content">
                                <img src="./images/term-of-work.svg">
                                <div class="plus-text">
                                    <h3 class="plus-text-name">
                                        15 ЛЕТ НА РЫНКЕ
                                    </h3>
                                    <p>Большой опыт работы в данной сфере.<br>Компания остована в 2008 году</p>
                                </div>
                            </div>
                        </il>
                        <il>
                            <div class="plus-content">
                                <img src="./images/round-the-clock-support.svg">
                                <div class="plus-text">
                                    <h3 class="plus-text-name">
                                        ПОДДЕРЖКА 24/7
                                    </h3>
                                    <p>Наши специалисты работают круглосуточно.<br>Они всегда готовы ответить на технические вопросы<br>и помочь в решении технических проблем.</p>
                                </div>
                            </div>
                        </il>
                        <il>
                            <div class="plus-content">
                                <img src="./images/deferred-payment.svg">
                                <div class="plus-text">
                                    <h3 class="plus-text-name">
                                        ОТЛОЖЕННЫЙ ПЛАТЁЖ 
                                    </h3>
                                    <p>Даём абонентам до 5 дней работы в кредит,<br>в случае отрицательного баланса.</p>
                                </div>
                            </div>
                        </il>
                    </ul>
                </div>
                <div class="plus-conteiner">
                    <ul>
                        <il>
                            <div class="plus-content">
                                <img src="./images/ruble.svg">
                                <div class="plus-text">
                                    <h3 class="plus-text-name">
                                        КОНКУРЕНТНЫЕ ТАРИФЫ 
                                    </h3>
                                    <p>Предоставляем абонентам разлычные тарифы,<br>которые соответсвуют их нуждам и требованиям</p>
                                </div>
                            </div>
                        </il>
                        <il>
                            <div class="plus-content">
                                <img src="./images/tv-svgrepo-com.svg">
                                <div class="plus-text">
                                    <h3 class="plus-text-name">
                                        300+ КАНАЛОВ В HD КАЧЕСТВЕ
                                    </h3>
                                    <p>Все тарифы включают в себя <br>более трёхсот IPTV каналов в HD качестве</p>
                                </div>
                            </div>
                        </il>
                        <il>
                            <div class="plus-content">
                                <img src="./images/repair-mechanism-svgrepo-com.svg">
                                <div class="plus-text">
                                    <h3 class="plus-text-name">
                                        ОБСЛУЖИВАНИЕ И РЕМОНТ
                                    </h3>
                                    <p>Поможем с обслуживанием и настройкой устройств,<br>а также с их ремонтом</p>
                                </div>
                            </div>
                        </il>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="footer">
                <div class="footer-img-and-copyright">
                    <a href="https://t.me/Office_Vnet_manager" target="_blank">
                        <img src="./images/telegram-svgrepo-com.svg">
                    </a>
                    <a href="https://t.me/VNet_chat_bot" target="_blank">
                        <img src="./images/robot-outline-in-a-circle-svgrepo-com.svg">
                    </a>
                    <p>&#169; 2023</p>
                </div>
                <div class="footer-info">
                    <h3>ОФИС ОБСЛУЖИВАНИЯ</h3>
                    <a href="https://yandex.ru/maps/-/CCU9NVqMWC">г. Донецк, Ляшенко 8</a>
                    <p>Режим работы: с 9:00 до 18:00, БЕЗ перерыва и выходных</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>
</html>