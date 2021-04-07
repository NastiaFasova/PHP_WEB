<?php
include("Post.php");
$post = Post::getInstance();
setcookie("username", $post->firstname, time() + (60 * 15), "/");
setcookie("surname", $post->lastname, time() + (60 * 15), "/");
setcookie("email", $post->email, time() + (60 * 15), "/");
setcookie("comment", $post->comment, time() + (60 * 15), "/");
?>
    <div class="hero_section_main menu">
        <div class="main_h">
            <div class="contacts">
                Контакти
            </div>
        </div>
    </div>
    </div>
    </div>
    </header>
    <main>
        <div class="container">
            <div class="contacts_section contacts">
                <div class="form-section">
                    <div class="contact_info contacts">
                        <div class="contact_item">
                            <img src="images/index/phone.svg" alt="phone">
                            <div class="contact_item_text">
                                <div class="contact_text_span">(063) 56 56 122<br>(096) 76 56 134</div>
                            </div>
                        </div>

                        <div class="contact_item">
                            <img src="images/index/icons/instagram-black.svg" alt="instagram-black">
                            <div class="contact_item_text">
                                <div class="contact_text_span">@asahi_2017</div>
                            </div>
                        </div>

                        <div class="contact_item">
                            <img src="images/index/letter-black.svg" alt="letter-black">
                            <div class="contact_item_text">
                                <div class="contact_text_span">asahi@gmail.com</div>
                            </div>
                        </div>
                        <div class="contact_item">
                            <img src="images/index/icons/facebook-black.svg" alt="facebook-black">
                            <div class="contact_item_text">
                                <div class="contact_text_span">www.facebook.com/asahi</div>
                            </div>
                        </div>
                    </div>
                    <div class="contact_item_text contacts">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.391732229644!2d28.43541191568756!3d49.23106177932567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5b7d99907d69%3A0x1c477758c9849088!2zItCQ0KHQkNCl0Jgi!5e0!3m2!1suk!2sua!4v1616244893701!5m2!1suk!2sua"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                class="map contacts"></iframe>
                        <div class="contact_text_span">м. Вінниця<br>вул. Трамвайна 3,<br>ЖК "АВАЛОН"</div>
                    </div>
                </div>
                <div class="form-section">
                    <form class="form" method="POST" action=<?php echo $_SERVER['REQUEST_URI'] ?>>
                        <h2 class="section-text contacts">Зворотній зв’язок</h2>
                        <p class="section-text small">Будемо раді дізнатись ваші побажання та <br> відгуки</p>
                        <form method="post">
                            <input required type="firstName" name="firstname" class="form-account" placeholder="Ім’я">
                            <input required type="lastName" name="lastname" class="form-account" placeholder="Прізвище">
                            <input required type="email" name="email" class="form-account"
                                   placeholder="Електронна адреса">
                            <input required type="phone" name="comment" class="form-account"
                                   placeholder="Текст повідомлення">
                            <button class="item_btn contacts" type="submit"><p>Залишити відгук</p></button>
                        </form>
                    </form>
                    <div class="contact_item contacts">
                        <img src="images/index/pin.svg" alt="pin" class="pin" height="55" width="55">
                        <img src="images/index/clock.svg" alt="clock" height="55" width="55">
                        <div class="contact_item_text">
                            <div class="contact_text_main">Графік роботи</div>
                            <div class="contact_text_span">з 10:00 до 22:00 <br>Час доставки 60 хв</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
if (!empty($_POST)) {
    session_start();
    $_SESSION["name"] = $post->firstname;
    $_SESSION["surname"] = $post->lastname;
    $fullname = $_SESSION["name"] . " " . $_SESSION["surname"];
    echo "<h2 style='text-align: center ; margin-bottom: 10%'> $fullname <br> Дякуємо за зворотній зв'язок!</h2>";
    session_unset();
    session_destroy();
}
?>