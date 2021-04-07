<?php
setcookie('User',
    array('name' => 'bob', 'surname' => 'sur',
        'email' => 'fasovaaa@gmail.com'), time() + 60 * 60 * 24 * 30, '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Суші-бар "Асахі"</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/medias.css">
    <link rel="stylesheet" href="pages/bootstrap-grid.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&family=Noto+Serif+TC&family=Playfair+Display:wght@400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;900&display=swap"
          rel="stylesheet">
</head>

<body>
<header class="main-header">
    <div class="container">
        <div class="hero_section">
            <div class="menu-section">
                <div class="logo-section">
                    <img src=images/menu/logo.png id="logo" alt="logo" class="logo">
                    <p>Смачна доставка <br>суші</p>
                </div>
                <nav class="menu-container" id="menu-container">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="/web/" class="nav-link">Головна</a>
                    <a href="?page=menu" class="nav-link">Меню</a>
                    <a href="#" class="nav-link">Оплата та доставка</a>
                    <a href="#" class="nav-link">Акції</a>
                    <a href="?page=contacts" class="nav-link">Контакти</a>
                    <a href="#" class="nav-link"><img src=images/shopping-cart%203.svg alt="shopping-cart"></a>
                    <a href="#" class="nav-link"><img src=images/email%204.svg alt="email"></a>
                </nav>
                <div class="menu_btns">
                    <a href="#" class="menu-btn social-media"><img src="images/index/icons/facebook.svg"></a>
                    <a href="#" class="menu-btn social-media"><img src="images/index/icons/instagram.svg"></a>
                    <a href="#" class="menu-btn burger-btn"><img src="images/index/icons/menu.svg" class="burger"></a>
                </div>
            </div>
            <div class="hero_section_main">
                <div class="main_h">Замовляйте та смакуйте <br> ваші улюблені суші!</div>
                <div class="main_p">Приготування та швидка доставка суші.<br> Вибір на будь-який смак :)</div>
                <a href="?page=menu" class="main_btn">Меню</a>
            </div>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <div class="most-popular">
            <h2 class="section-text">НАЙПОПУЛЯРНІШІ:</h2>
            <div class="items_container">
                <a href="#" class="item active">
                    <div class = "sushi">
                        <img src="images/index/sushi1.png">
                        <div class="item_text">“Філадельфія”з лососем</div>
                        <div class="item_small_text">Крем сир , рис, лосось, огірок, авокадо, огірок, імбир</div>
                        <div class="item_price">250 грн</div>
                        <button class="item_btn">Додати в кошик</button>
                    </div>
                </a>

                <a href="#" class="item">
                    <div class = "sushi">
                        <img src="images/index/sushi2.png">
                        <div class="item_text">“Філадельфія” унагі з грушею</div>
                        <div class="item_small_text">Крем сир , рис, груша, вугор, кунжут , соус Унагі</div>
                        <div class="item_price">250 грн</div>
                        <button class="item_btn">Додати в кошик</button>
                    </div>
                </a>

                <a href="#" class="item">
                    <div class = "sushi">
                        <img src="images/index/sushi3.png">
                        <div class="item_text">“Каліфорнія” з креветкою у кунжуті</div>
                        <div class="item_small_text">Рис, кунжут, огірок, авокадо, тигрова креветка, імбир</div>
                        <div class="item_price">200 грн</div>
                        <button class="item_btn">Додати в кошик</button>
                    </div>
                </a>

                <a href="#" class="item">
                    <div class = "sushi">
                        <img src="images/index/sushi4.png">
                        <div class="item_text">“Каліфорнія” з тунцем у кунжуті</div>
                        <div class="item_small_text">Рис, кунжут, огірок, авокадо, тунець, майонез, імбир</div>
                        <div class="item_price">200 грн</div>
                        <button class="item_btn">Додати в кошик</button>
                    </div>
                </a>

                <a href="#" class="item">
                    <div class = "sushi">
                        <img src="images/index/sushi5.png">
                        <div class="item_text">“Каліфорнія” з тунцем у ікрі</div>
                        <div class="item_small_text">Рис, ікра, огірок, авокадо, майонез, тунець</div>
                        <div class="item_price">250 грн</div>
                        <button class="item_btn">Додати в кошик</button>
                    </div>
                </a>

                <a href="#" class="item">
                    <div class = "sushi">
                        <img src="images/index/sushi6.png">
                        <div class="item_text">“Золотий дракон” з вугрем</div>
                        <div class="item_small_text">Вугор, сир, креветка, огірок, рис, майонез</div>
                        <div class="item_price">250 грн</div>
                        <button class="item_btn">Додати в кошик</button>
                    </div>
                </a>

                <a href="#" class="item last">
                    <div class = "sushi">
                        <img src="images/index/sushi7.png">
                        <div class="item_text">“Зелений дракон” з авокадо</div>
                        <div class="item_small_text">Авокадо, сир, вугор, огірок, рис, кунжут</div>
                        <div class="item_price">250 грн</div>
                        <button class="item_btn">Додати в кошик</button>
                    </div>
                </a>

                <a href="#" class="item last">
                    <div class = "sushi">
                        <img src="images/index/sushi8.png">
                        <div class="item_text">“Червоний дракон” з лососем</div>
                        <div class="item_small_text">Лосось, сир, вугор, авокадо, огірок, ікра тобіко</div>
                        <div class="item_price">250 грн</div>
                        <button class="item_btn">Додати в кошик</button>
                    </div>
                </a>
            </div>
            <nav class="slider-nav">
                <button class="previous">
                    <img src="images/index/icons/arows/left.svg">
                </button>
                <button class="next">
                    <img src="images/index/icons/arows/right.svg">
                </button>
            </nav>
            <a href="#" class="see-all_btn">
Переглянути всі
<img src="images/index/arrow.svg">
            </a>
        </div>

        <div class="facts">
            <h2 class="section-text">ФАКТИ ПРО НАС</h2>
            <div class="row">
                <div class="column">
                    <a href="#">
                        <div class="card f">
                            <img src="images/index/fact1.png">
                            <div class="facts_text">
                                <div class="text_h">Швидка доставка</div>
                                <div class="text_p">Замовлення доставляється протягом 60 хв - 90 хв.</div>
                            </div>
                        </div>
                    </a>

                    <a href="#">
                        <div class="card s">
                            <img src="images/index/fact2.png">
                            <div class="facts_text">
                                <div class="text_h">Свіжі продукти</div>
                                <div class="text_p">Наші професійні кухарі готують Ваші улюблені суші виключно із свіжих
                                    продуктів
                                    </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="column">
                    <a href="#">
                        <div class="card th">
                            <img src="images/index/fact3.png">
                            <div class="facts_text">
                                <div class="text_h">Як традиційні страви, так і ексклюзивні</div>
                                <div class="text_p">Справжня японська кухня, створена нашими професійними кухарями</div>
                            </div>
                        </div>
                    </a>

                    <a href="#">
                        <div class="card frs">
                            <img src="images/index/fact4.png">
                            <div class="facts_text">
                                <div class="text_h">Знижки та акції</div>
                                <div class="text_p">Кожному постійному клієнтові ASAHI надає знижки, подарунки,
                                    проводить цікаві акції
</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="contacts_section">
            <div class="contact_info">
                <div class="contact_item">
                    <img src="images/index/clock.svg">
                    <div class="contact_item_text">
                        <div class="contact_text_main">Графік роботи</div>
                        <div class="contact_text_span">з 10:00 до 22:00 <br>Час доставки 60 хв</div>
                    </div>
                </div>

                <div class="contact_item">
                    <img src="images/index/place.svg">
                    <div class="contact_item_text">
                        <div class="contact_text_main">Адреса</div>
                        <div class="contact_text_span">м. Вінниця<br>вул. Трамвайна 3,<br>ЖК "АВАЛОН"</div>
                    </div>
                </div>

                <div class="contact_item last">
                    <img src="images/index/phone.svg">
                    <div class="contact_item_text">
                        <div class="contact_text_main">Контакти</div>
                        <div class="contact_text_span">(063) 56 56 122<br>(096) 76 56 134<br>asahi@gmail.com</div>
                    </div>
                </div>

                <div class="contact_item last">
                    <img src="images/index/delivery.svg">
                    <div class="contact_item_text">
                        <div class="contact_text_main">Доставка</div>
                        <div class="contact_text_span">При замовленні <br>від 250 грн <br>доставка по місту <br>безкоштовна
</div>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.391732229644!2d28.43541191568756!3d49.23106177932567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5b7d99907d69%3A0x1c477758c9849088!2zItCQ0KHQkNCl0Jgi!5e0!3m2!1suk!2sua!4v1616244893701!5m2!1suk!2sua"
                    style="border:0;" allowfullscreen="" loading="lazy" class="map"></iframe>
        </div>
    </div>
</main>

