<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=480">
    <title>Сертифікат подарунковий</title>
    <meta name="description" content="Цей подарунок для тебе, тому що ти особлива... тебе люблять і цінують!">
    <meta property="og:description" content='Цей подарунок для тебе, тому що ти особлива... тебе люблять і цінують!'>
    <meta property="og:image" content="https://for-sisters-ua-certificate.vercel.app/img/fb_img.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:site_name" content="certificate.for-sisters-ua">
    <meta property="og:title" content='Подарунковий сертифікат'>
    <meta property="og:type" content="website">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" sizes="any" type="image/svg+xml" href="img/favicon.svg">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="wrapper">
        <main>
            <div class="info__wrapper">
                <section class="sticky">
                    <img src="img/logo.svg" alt="for-sisters-ua" width="100" height="347" class="sticky__logo">
                </section>

                <div class="info__right">
                    <section class="hero">
                        <div class="container">
                            <h1 class="hero__title" data-aos="fade-in" data-aos-delay="2000" data-aos-duration="700">
                                СЕРТИФІКАТ
                                <span>подарунковий</span>
                            </h1>
                            <p class="hero__subtitle">
                                <span data-aos="fade-in" data-aos-delay="2200" data-aos-duration="700">Merry
                                    Christmas</span>
                                <span data-aos="fade-in" data-aos-delay="2400" data-aos-duration="700">and</span>
                                <span data-aos="fade-in" data-aos-delay="2600" data-aos-duration="700">Happy New
                                    Year</span>
                            </p>
                            <p class="hero__price" data-aos="fade-in" data-aos-delay="3000" data-aos-duration="700">
                                1000<span>грн</span>
                            </p>
                            <a class="hero__link">
                                <img src="img/arrow-bottom.svg" alt="arrow" width="17">
                            </a>
                        </div>
                    </section>

                    <section class="info" id="info">
                        <div class="container">
                            <p class="info__desc" data-aos="fade-up" data-aos-duration="700">
                                Цей подарунок для тебе, тому що ти особлива... тебе люблять і цінують
                            </p>
                            <p class="info__desc" data-aos="fade-up" data-aos-duration="700">
                                Обрати подарунок можна тут
                            </p>
                            <a href="https://www.instagram.com/for_sisters_ua/" class="info__link" data-aos="fade-up"
                                data-aos-duration="700">
                                <span>@for_sisters_ua</span>
                            </a>
                            <p class="info__warning" data-aos="fade-in" data-aos-duration="700">
                                Термін дії сертифікату до 28.02.2025
                            </p>
                        </div>
                    </section>
                </div>
            </div>

            <section class="contacts">
                <div class="container">
                    <h2 class="contacts__title" data-aos="fade-up" data-aos-duration="700">
                        АКТИВАЦІЯ
                    </h2>
                    <form class="contacts__order js-form">
                        <input type="number" name="промокод" class="contacts__field" maxlength="8"
                            placeholder="промокод" required data-aos="fade-right" data-aos-duration="700">
                        <input type="text" name="инстаграм" class="contacts__field" placeholder="instagram" required
                            data-aos="fade-left" data-aos-duration="700">
                        <input type="hidden" name="дата" class="js-form-date">
                        <button class="contacts__submit" type="submit" data-aos="fade-up"
                            data-aos-duration="700">Активувати</button>
                    </form>
                    <img src="img/logo-s.svg" alt="for-sisters-ua" width="349" class="contacts__logo" data-aos="fade-in"
                        data-aos-duration="700">
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="container">
                <a href="https://t.me/oleksandr_241019" class="footer__link">created by Oleksandr Ilnytskyi</a>
            </div>
        </footer>

        <div class="loader js-loader">
            <img src="img/loader.gif" alt="" width="50" height="50" class="loader__item">
            <p class="loader__text">
                Зачекайте, будь-ласка, йде активація вашого сертифікату...
            </p>
        </div>
    </div>

    <script defer src="js/main.js"></script>
</body>

</html>