<?php
use yii\helpers\Html;
#use yii\bootstrap\Nav;
#use yii\bootstrap\NavBar;
#use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this); ?>
<?php $this->beginPage() ?>
<!doctype html>

<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
       <!--<link rel="stylesheet" href="../css/slickplugin.css">
        <link rel="stylesheet" href="../css/fancyboxplugin.css">
        <link rel="stylesheet" href="../css/base.css">
        <link rel="stylesheet" href="../css/index.css"> -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php 
       $this->registerCssFile('@web/css/slickplugin.css');
       $this->registerCssFile('@web/css/fancyboxplugin.css');       
       $this->registerCssFile('@web/css/index.css');

        ?>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="b-main">
            <header class="b-main__header b-header">
                <div class="g-wrap">
                    <nav class="b-menu__nav_mobile">
                        <div class="b-menu__close_mobile">
                            <img src="/web/img/close-icon.png" alt="X">
                        </div>         
                        <ul class="b-menu_mobile">
                            <li><a href="#" class="b-menu__link_mobile">Главная</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Номера</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Цены на отдых</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Услуги</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Бронирование</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Сезон</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Отдых в Карпатах</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Новости</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Галерея</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Отзывы</a></li>
                            <li><a href="#" class="b-menu__link_mobile">Контакты</a></li>
                        </ul>
                    </nav>
                    <div class="b-header b-header_left">
                        <button type="button" class="b-menuBtn b-header__block_left visible-xs-block">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="b-icon-bar"></span>
                            <span class="b-icon-bar"></span>
                            <span class="b-icon-bar"></span>
                        </button>
                        <div class="b-header__block b-header__block_left b-block b-block_address hidden-xs">
                            <aside class="b-block__icon">
                                <div class="icons-sprite icons-sprite__place-icon"></div>
                            </aside>
                            <div class="b-block__text">
                                <span>Буковель,</span><br>
                                <span>пос.Поляница</span><br>
                                <span>ул. Стаища, 274</span>
                            </div>
                        </div>
                        <div class="b-header__block b-header__block_left b-block b-block_phones">
                            <aside class="b-block__icon hidden-xs">
                                 <div class="icons-sprite icons-sprite__phone-icon"></div>
                            </aside>
                            <div class="b-block__text">
                                <span>(097) 098 90 80</span><br>
                                <span>(066) 881 98 89</span>
                            </div>
                        </div>
                        <div class="b-header__menu g-clearfix">
                            <ul class="b-menu hidden-xs">
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Главная</a></li>
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Номера</a></li>
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Цены на отдых</a></li>
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Услуги</a></li>
                            </ul>
                            <div class="b-header__dividerXS visible-xs-inline-block"></div>
                        </div>
                    </div>
                    <div class="b-header b-header_center b-logo">
                        <a href="" class="b-logo__link">
                            <img src="/web/img/logo.png" alt="Bella Vista logo" class="b-logo__img img-responsive">
                        </a>
                    </div>
                    <div class="b-header b-header_right">
                        <div class="b-header__block_right  b-block  visible-xs-inline-block">
                            <button class="b-callback_minified">
<!--                                <img src="/web/img/phone-tube.png" alt="">-->
                               <span class="b-callback__icon_minified"></span>
                            </button>
                        </div>
                        <div class="b-header__block b-header__block_right b-block b-block_langs">
                            <a href="#" class="b-langs__link">UA</a>
                            <a href="#" class="b-langs__link b-langs__link_active">RU</a>
                            <a href="#" class="b-langs__link">ENG</a>
                        </div>
                        <div class="b-header__block b-header__block_right b-block b-block__callback hidden-xs">
                            <p>Хотите что бы мы Вам <br> перезвонили?</p>
                            <button>Заказать звонок</button>
                        </div>
                        <div class="b-header__menu g-clearfix">
                            <ul class="b-menu hidden-xs">
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Бронирование</a></li>
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Сезон</a></li>
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Отдых в Карпатах</a></li>
                                <li class="b-menu__item"><a href="#" class="b-menu__link">Контакты</a></li>
                            </ul>
                            <div class="b-header__dividerXS visible-xs-inline-block"></div>
                        </div>
                    </div>
                 </div>
            </header>
            <section class="b-main__section b-section b-section_wallpaper">
                <div class="g-wrap container-fluid">
                    <form action="" class="b-section__form b-form b-form_bookOnline container-fluid">
                        <div class="b-form__header">Забронировать ONLINE</div>
                        <div class="b-form__grid b-form__grid_half">
                            <label for="from" class="sr-only">From</label>
                            <input type="text" id="from" name="from" class="b-input_date b-input_from" placeholder="Дата заезда">
<!--                            <div class="b-input__icon icons-sprite icons-sprite__calendar1"></div>-->
                        </div>
                        <div class="b-form__grid b-form__grid_half">
                            <label for="to" class="sr-only">to</label>
                            <input type="text" id="to" name="to" class="b-input_date  b-input_to" placeholder="Дата выезда">
<!--                            <div class="b-input__icon icons-sprite icons-sprite__calendar2"></div>-->
                        </div>
                        <div class="b-form__grid b-form__grid_half">
                            <input type="text" name="name" placeholder="Ваше имя">
                        </div>
                        <div class="b-form__grid b-form__grid_half">
                            <input type="tel" name="phoneNum" value="+380">
                        </div>
                        <div class="b-form__grid b-form__grid_full">
                            <select name="accomodation">
                                <option value="" disabled selected hidden>Размещение</option>
                                <option value="1">Вариант 1</option>
                                <option value="2">Вариант 2</option>
                                <option value="3">Вариант 3</option>
                                <option value="4">Вариант 4</option>
                                <option value="5">Вариант 5</option>
                            </select>
                        </div>
                        <input type="submit" value="забронировать" class="b-button_book">
                    </form>            
                </div>
            </section>
            <section class="b-main__section b-section">
                <div class="b-section__heading">
                    <div class="b-heading__mustaches logos-sprite logos-sprite__mustache-left"></div>
                        <h1 class="b-section__header">Villa Bella Vista</h1>
                    <div class="b-heading__mustaches logos-sprite logos-sprite__mustache-right"></div>
                </div>
                <div class="g-wrap container-fluid">
                    <p class="b-about__text">Современная комфортабельная Вилла Bellavista расположена в самом "сердце" нетронутой природы Карпатских гор - в пос. Поляница,в 2-х километрах от Горнолыжного курорта Буковель. Вилла включает в себя 28 комфортабельных однокомнатных и двухкомнатных номеров. Ресторан и сауна. Ресторан расчитан на 70 мест где вас ждёт украинская и европейская кухня. Отель Bellavista идеально подходит для семейного отдыха, подальше от шума и суеты. Компактность виллы в сочетании с сердечным отношением хозяев создают атмосферу домашнего уюта и тепла.</p>
                    <div>
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="b-about__block b-block_hotelReview">
                                     <div class="b-hotelReview">                                 
                                         <img src="/web/img/Bella-Vista.jpg" alt="Bella Vista hotel" class="b-about__hotel g-img_responsive">
                                         <a href="#" class="b-about__link">Смотреть обзорный тур по Villa Bella Vista</a>
                                     </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="b-about__block b-about__block_left b-block_newYear">
                                    <img src="/web/img/newYear-in-Carpathians.jpg" alt="Новый год в Карпатах" class="b-about__newYear g-img_responsive">
                                    <a href="#" class="b-about__link">Новый год в Карпатах</a>
                                </div>
                                <div class="b-about__block b-about__block_left b-block_rink">
                                    <img src="/web/img/rink-in-Buka.jpg" alt="" class="b-about__rink g-img_responsive">
                                    <a href="#" class="b-about__link">Каток в Буковеле</a></div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="b-about__block b-about__block_right b-block_rest">
                                    <img src="/web/img/Holidays-in-Bukovel_main.jpg" alt="Отдых в Буковеле" class="b-about__holidays g-img_responsive">
                                    <a href="#" class="b-about__link">Отдых в Буковеле</a>
                                </div>
                                <div class="b-about__block b-about__block_right b-block_restWithKids">
                                    <img src="/web/img/holidays-with-kids_main.jpg" alt="Отдых в Карпатах с детьми" class="b-about__holidaysKids g-img_responsive">
                                    <a href="#" class="b-about__link">Отдых в Карпатах с детьми</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
            <section class="b-main__section b-section">
               <div class="b-section__heading">
                    <div class="b-heading__mustaches logos-sprite logos-sprite__mustache-left"></div>
                    <div class="b-section__header">Наши номера</div>
                    <div class="b-heading__mustaches logos-sprite logos-sprite__mustache-right"></div>
                </div>
                <div class="g-wrap b-apartments js-masonry__container">
                        <div class="b-apartment">
                           <img src="/web/img/standard1.jpg" alt="номер стандарт-1" class="g-img_responsive">
                           <div class="b-apartment__description">    
                               <div class="b-description__heading"><span class="b-description__headerLines">&mdash;&mdash;</span>&nbsp;Стандарт 1&nbsp;<span class="b-description__headerLines">&mdash;&mdash;</span></div>
                               <div class="b-description__info">
                                    <p>В номере: двуспальная кровать, рабочий стол, 2 тумбочки, шкаф, стулья, фен, LED телевизор, спутниковое телевидение, доступ к сети Интернет, набор полотенец и мини-парфюмерии. </p>
                                    <div class="b-link__cover b-link__cover_apartment">
                                       <a href="#" class="b-apartment__link">Подробнее</a>
                                    </div>
                               </div>     
                           </div>
                        </div>
                        <div class="b-apartment">
                            <img src="/web/img/standard2.jpg" alt="номер стандарт-2" class="g-img_responsive">
                            <div class="b-apartment__description">
                                <div class="b-description__heading"><span class="b-description__headerLines">&mdash;&mdash;</span>&nbsp;Стандарт 2&nbsp;<span class="b-description__headerLines">&mdash;&mdash;</span></div>
                                <div class="b-description__info">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet molestiae vitae nemo libero odit debitis repellendus dolores eveniet quidem totam ad asperiores architecto expedita a culpa excepturi, animi eius eaque.</p>
                                    <div class="b-link__cover b-link__cover_apartment">
                                       <a href="#" class="b-apartment__link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-apartment">
                            <img src="/web/img/half-luxe.jpg" alt="номер Полулюкс" class="g-img_responsive">
                            <div class="b-apartment__description">
                                <div class="b-description__heading"><span class="b-description__headerLines">&mdash;&mdash;</span>&nbsp;Полулюкс&nbsp;<span class="b-description__headerLines">&mdash;&mdash;</span></div>
                                <div class="b-description__info">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam distinctio vero, quibusdam facilis nostrum delectus est voluptate animi, illo voluptates, repellat impedit nihil. Expedita vel, deserunt alias inventore quasi unde.</p>
                                    <div class="b-link__cover b-link__cover_apartment">
                                       <a href="#" class="b-apartment__link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-apartment">
                            <img src="/web/img/family-luxe.jpg" alt="номер Семейный люкс" class="g-img_responsive">
                            <div class="b-apartment__description">
                                <div class="b-description__heading"><span class="b-description__headerLines">&mdash;&mdash;</span>&nbsp;Семейный люкс&nbsp;<span class="b-description__headerLines">&mdash;&mdash;</span></div>
                                <div class="b-description__info">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni perspiciatis illum vitae incidunt error quas cumque. Numquam fugiat id, veniam ut accusamus architecto dolor eos at voluptatibus expedita, possimus!</p>
                                    <div class="b-link__cover b-link__cover_apartment">
                                       <a href="#" class="b-apartment__link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-apartment">
                            <img src="/web/img/attic-luxe.jpg" alt="номер Люкс в мансарде" class="g-img_responsive">
                            <div class="b-apartment__description">
                                <div class="b-description__heading"><span class="b-description__headerLines">&mdash;&mdash;</span>&nbsp;Люкс в мансарде&nbsp;<span class="b-description__headerLines">&mdash;&mdash;</span></div>
                                <div class="b-description__info">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae exercitationem, similique. Ullam, veritatis perferendis optio odit in qui exercitationem iure culpa quaerat provident repellendus hic, voluptatum doloremque quasi, molestiae est.</p>
                                    <div class="b-link__cover b-link__cover_apartment">
                                       <a href="#" class="b-apartment__link">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </section>
            <section class="b-main__section b-section">
                <div class="b-section__heading">
                    <div class="b-heading__mustaches logos-sprite logos-sprite__mustache-left"></div>
                    <div class="b-section__header">Наши услуги</div>
                    <div class="b-heading__mustaches logos-sprite logos-sprite__mustache-right"></div>
                </div>
                <div class="g-wrap">
                    <div class="g-container-fluid">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="b-service">
                                    <a href="#">
                                        <img src="/web/img/restaraunt.jpg" alt="Ресторан">
                                    </a> 
                                    <div class="b-service__heading">Ресторан</div>
                                    <p>Приезжая на отдых в Карпаты, не хочется думать о том, что сегодня на ужин или чем завтра позавтракать.</p>
                                    <div class="b-link__cover b-link__cover_service">
                                        <a href="#" class="b-service__link">Подробнее</a>
                                    </div>
                                    <div class="b-service__frame"></div> 
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="b-service">
                                    <a href="#">
                                        <img src="/web/img/sauna.jpg" alt="Сауна">
                                    </a>
                                    <div class="b-service__heading">Сауна</div>
                                    <p>В летнее время мы предлагает гостям бассейн. В летнее время мы предлагает гостям бассейн.</p>
                                    <div class="b-link__cover b-link__cover_service">
                                        <a href="#" class="b-service__link">Подробнее</a>
                                    </div>
                                    <div class="b-service__frame"></div> 
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="b-service">
                                    <a href="#">
                                        <img src="/web/img/pool.jpg" alt="Бассейн">
                                    </a>    
                                    <div class="b-service__heading">Бассейн</div>
                                    <p>В нашем отеле есть множество развлечений, касающихся занятий на воде, и различные процедуры.</p>
                                    <div class="b-link__cover b-link__cover_service">
                                        <a href="#" class="b-service__link">Подробнее</a>
                                    </div>
                                    <div class="b-service__frame"></div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="b-main__section b-section">
               <div class="b-section__heading">
                    <div class="b-heading__mustaches logos-sprite logos-sprite__mustache-left"></div>
                    <div class="b-section__header">Отзывы</div>
                    <div class="b-heading__mustaches logos-sprite logos-sprite__mustache-right"></div>
                </div>
                <div class="b-responses">
                    <div class="g-wrap b-responses__slider">
                            <div class="b-slider">
                                <div class="b-slider__item">
                                    <article class="b-response">
                                        <header>
                                            <div class="clients-sprite clients-sprite__client1"></div>
                                            <div class="b-client__name">Ирина</div>
                                            <p>25.12.2016</p>
                                        </header>
                                        <p>Здравствуйте дорогие путешественники))) Накавшись по миру, в тур “4 свободных дня” решили прокатиться Киев-Львов и на сутки заехать в Поляницу. Решили ехать без предварительных бронировок. Как получится, так и будет. Где получится, там и остановимся. Хотелось быть свободными от графиков, времени, даты. И скучала я за Карпатами. Последний раз была пять лет назад. Хотелось сравнить, хотелось увидеть, хотелось попробовать, хотелось услышать…</p>
                                        <div class="b-link__cover b-link__cover_response">
                                            <a href="#" class="b-response__link">Читать еще</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="b-slider__item">
                                    <article class="b-response">
                                        <header>
                                            <div class="clients-sprite clients-sprite__client2"></div>
                                            <div class="b-client__name">Марина</div>
                                            <p>25.12.2016</p>
                                        </header>
                                        <p>Здравствуйте дорогие путешественники))) Накавшись по миру, в тур “4 свободных дня” решили прокатиться Киев-Львов и на сутки заехать в Поляницу. Решили ехать без предварительных бронировок. Как получится, так и будет. Где получится, там и остановимся. Хотелось быть свободными от графиков, времени, даты. И скучала я за Карпатами. Последний раз была пять лет назад. Хотелось сравнить, хотелось увидеть, хотелось попробовать, хотелось услышать…</p>
                                        <div class="b-link__cover b-link__cover_response">
                                            <a href="#" class="b-response__link">Читать еще</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="b-slider__item">
                                    <article class="b-response">
                                        <header>
                                            <div class="clients-sprite clients-sprite__client3"></div>
                                            <div class="b-client__name">Александр</div>
                                            <p>25.12.2016</p>
                                        </header>
                                        <p>Здравствуйте дорогие путешественники))) Накавшись по миру, в тур “4 свободных дня” решили прокатиться Киев-Львов и на сутки заехать в Поляницу. Решили ехать без предварительных бронировок. Как получится, так и будет. Где получится, там и остановимся. Хотелось быть свободными от графиков, времени, даты. И скучала я за Карпатами. Последний раз была пять лет назад. Хотелось сравнить, хотелось увидеть, хотелось попробовать, хотелось услышать…</p>
                                        <div class="b-link__cover b-link__cover_response">
                                            <a href="#" class="b-response__link">Читать еще</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="b-slider__item">
                                    <article class="b-response">
                                        <header>
                                            <div class="clients-sprite clients-sprite__client1"></div>
                                            <div class="b-client__name">Ирина</div>
                                            <p>25.12.2016</p>
                                        </header>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis necessitatibus ullam dolorem ea, laborum ex, voluptatum quis, odit a eos suscipit eligendi impedit numquam veritatis. Reiciendis praesentium atque minus voluptatem.. Officiis necessitatibus ullam dolorem ea, laborum ex, voluptatum quis, odit a eos suscipit eligendi impedit numquam veritatis.</p>
                                        <div class="b-link__cover b-link__cover_response">
                                            <a href="#" class="b-response__link">Читать еще</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="b-slider__item">
                                    <article class="b-response">
                                        <header>
                                            <div class="clients-sprite clients-sprite__client2"></div>
                                            <div class="b-client__name">Марина</div>
                                            <p>25.12.2016</p>
                                        </header>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, maxime, impedit. Neque fuga consectetur quo, unde repellendus reprehenderit animi itaque, necessitatibus eius eum, vel earum doloremque totam provident magnam error!. Officiis necessitatibus ullam dolorem ea, laborum ex, voluptatum quis, odit a eos suscipit eligendi impedit numquam veritatis.</p>
                                        <div class="b-link__cover b-link__cover_response">
                                            <a href="#" class="b-response__link">Читать еще</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="b-slider__item">
                                    <article class="b-response">
                                        <header>
                                            <div class="clients-sprite clients-sprite__client3"></div>
                                            <div class="b-client__name">Александр</div>
                                            <p>25.12.2016</p>
                                        </header>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, maxime, impedit. Neque fuga consectetur quo, unde repellendus reprehenderit animi itaque, necessitatibus eius eum, vel earum doloremque totam provident magnam error!. Officiis necessitatibus ullam dolorem ea, laborum ex, voluptatum quis, odit a eos suscipit eligendi impedit numquam veritatis. Atque, maxime, impedit. Neque fuga consectetur quo, unde repellendus reprehenderit animi itaque, necessitatibus eius eum, vel earum doloremque totam provident magnam error!</p>
                                        <div class="b-link__cover b-link__cover_response">
                                            <a href="#" class="b-response__link">Читать еще</a>
                                        </div>
                                    </article>
                                </div>
                            </div>
<!--
                            <div class="b-slider__controls">
                                <div class="b-slider__button b-button_prev">
                                    
                                </div>
                                <div class="b-slider__button b-button_next">
                                    
                                </div>
                            </div>
-->
                        </div>
                </div>
                
            </section>
            <section class="b-main__section b-section">
                <div class="b-section__heading">
                    <div class="b-heading__mustaches logos-sprite logos-sprite__mustache-left"></div>
                    <div class="b-section__header">Новости</div>
                    <div class="b-heading__mustaches logos-sprite logos-sprite__mustache-right"></div>
                </div>
                <div class="g-wrap">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="b-news__articles col-lg-8 col-sm-12">
                                <article class="b-newsOne">
                                    <aside>
                                        <img src="/web/img/skier.jpg" alt="лыжник прыжок">
                                    </aside>
                                    <section>
                                        <div class="b-newsOne__date">11.09.2016</div>
                                        <a href="#" class="b-newsOne__heading">Техника катания на горных лыжах</a>
                                        <p class="b-newsOne__text">В любом занятии очень важна правильная техника его выполнения, и катание на лыжах не является исключением. Чтобы получить максимум пользы и удовольствия от катания, нужно следовать определенным правилам...</p>
                                        <div class="b-link__cover b-link__cover_newsOne">
                                            <a href="#" class="b-newsOne__link">Читать еще</a>
                                        </div>
                                    </section>
                                </article>
                                <article class="b-newsOne">
                                    <aside>
                                        <img src="/web/img/bukovel-map.jpg" alt="карта Буковель">
                                    </aside>
                                    <section>
                                        <div class="b-newsOne__date">31.10.2016</div>
                                        <a href="#" class="b-newsOne__heading">Инфраструктура Буковеля</a>
                                        <p class="b-newsOne__text">Буковель издавна славится своим незабываемым курортом. Благодаря развитой инфраструктуре, здесь вы можете в полной мере насладиться проживанием в комфортабельных номерах отелей, получить удовольствие от катания на хороших...</p>
                                        <div class="b-link__cover b-link__cover_newsOne">
                                            <a href="#" class="b-newsOne__link">Читать еще</a>
                                        </div>
                                    </section>
                                </article>
                                <article class="b-newsOne">
                                    <aside>
                                        <img src="/web/img/running-skier.jpg" alt="лыжи">
                                    </aside>
                                    <section>
                                        <div class="b-newsOne__date">11.09.2016</div>
                                        <a href="#" class="b-newsOne__heading">Как выбрать лыжи для катания в Карпатах</a>
                                        <p class="b-newsOne__text">Каждый опытный лыжник знает, что от правильно выбранных лыж порой зависит качество катания. На сегодняшний день разнообразие лыж просто поражает воображение, иногда глаза разбегаются, и думаешь какие же из них выбрать...</p>
                                        <div class="b-link__cover b-link__cover_newsOne">
                                            <a href="#" class="b-newsOne__link">Читать еще</a>
                                        </div>
                                    </section>
                                </article>
                                <div class="b-link__cover b-link__cover_news">
                                    <a href="#" class="b-news__link hidden-lg">все новости</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="b-news__gallery">
                                    <div class="b-gallery__heading">Галерея</div>
                                    <div class="b-gallery__container">
                                        <a href="/web/img/attic-luxe.jpg" class="b-gallery__item fancybox-thumb" data-fancybox-group="fancybox-thumb">
                                            <img src="/web/img/gallery1.jpg" alt="гори Карпати пейзаж">
                                            <div class="b-gallery__overlay">
                                                <div class="b-overlay__icon">
                                                    <img src="/web/img/scale.png" alt=""></div>
                                            </div>
                                        </a>
                                        <a href="/web/img/family-luxe.jpg" class="b-gallery__item fancybox-thumb" data-fancybox-group="fancybox-thumb">
                                            <img src="/web/img/gallery2.jpg" alt="гори Карпати пейзаж">
                                            <div class="b-gallery__overlay">
                                                <div class="b-overlay__icon">
                                                    <img src="/web/img/scale.png" alt=""></div>
                                            </div>
                                        </a>
                                        <a href="/web/img/half-luxe.jpg" class="b-gallery__item fancybox-thumb" data-fancybox-group="fancybox-thumb">
                                            <img src="/web/img/gallery3.jpg" alt="гори Карпати пейзаж">
                                            <div class="b-gallery__overlay">
                                                <div class="b-overlay__icon">
                                                    <img src="/web/img/scale.png" alt=""></div>
                                            </div>
                                        </a>
                                        <a href="/web/img/standard1.jpg" class="b-gallery__item fancybox-thumb" data-fancybox-group="fancybox-thumb">
                                            <img src="/web/img/gallery4.jpg" alt="гори Карпати пейзаж">
                                            <div class="b-gallery__overlay">
                                                <div class="b-overlay__icon">
                                                    <img src="/web/img/scale.png" alt=""></div>
                                            </div>
                                        </a>
                                        <a href="/web/img/standard2.jpg" class="b-gallery__item fancybox-thumb" data-fancybox-group="fancybox-thumb">
                                            <img src="/web/img/gallery5.jpg" alt="гори Карпати пейзаж">
                                            <div class="b-gallery__overlay">
                                                <div class="b-overlay__icon">
                                                    <img src="/web/img/scale.png" alt=""></div>
                                            </div>
                                        </a>
                                        <a href="/web/img/attic-luxe.jpg" class="b-gallery__item fancybox-thumb" data-fancybox-group="fancybox-thumb">
                                            <img src="/web/img/gallery6.jpg" alt="гори Карпати пейзаж">
                                            <div class="b-gallery__overlay">
                                                <div class="b-overlay__icon">
                                                    <img src="/web/img/scale.png" alt=""></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="b-link__cover b-link__cover_news">
                                    <a href="#" class="b-news__link hidden-lg">все фото</a>
                                </div>
                            </div>
                        </div>
                        <div class="row visible-lg-block">
                            <div class="col-lg-8">
                                <div class="b-link__cover b-link__cover_news">
                                    <a href="#" class="b-news__link">все новости</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="b-link__cover b-link__cover_news">
                                    <a href="#" class="b-news__link">все фото</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="b-main__section b-section b-section_contacts">
                <div class="b-section__heading">
                    <div class="b-heading__mustaches logos-sprite logos-sprite__mustache-left"></div>
                    <div class="b-section__header">Контакты</div>
                    <div class="b-heading__mustaches logos-sprite logos-sprite__mustache-right"></div>
                </div>
                <div class="g-wrap container-fluid">
                    <div class="row">
                        <div class="b-contacts__map col-xs-12 col-md-9">
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21206.844373407774!2d24.401053233226495!3d48.363299333972826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47371890ae985cd7%3A0x19d392532e2f078c!2z0JLQuNC70LvQsCAi0JHQtdC70LvQsCDQktC40YHRgtCwIg!5e0!3m2!1suk!2sua!4v1484225344174" width="784" height="333" class="b-map" allowfullscreen></iframe>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="b-contacts__container">
                                <div class="b-contacts">
                                    <div class="b-contacts__block b-contacts__address">
                                         <aside class="b-contacts__icon">
                                             <div class="icons-sprite icons-sprite__place-icon"></div>
                                         </aside>
                                         <div class="b-contacts__text">
                                            <span>Буковель,</span><br>
                                            <span>78711</span><br>
                                            <span>пос.Поляница</span><br>
                                            <span>ул. Стаища, 274</span>
                                         </div>
                                    </div>
                                    <div class="b-contacts__block b-contacts__phones">
                                        <aside class="b-contacts__icon">
                                            <div class="icons-sprite icons-sprite__phone-icon"></div>
                                        </aside>
                                        <div class="b-contacts__text">
                                            <div class="b-phones_preText">Тел:</div>
                                            <div class="b-phones">
                                                <span>+380970989080</span><br>
                                                <span>+380668819889</span><br>
                                                <span>+380673106776</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-contacts__block b-contacts__email">
                                        <aside class="b-contacts__icon">                                        
                                            <div class="icons-sprite icons-sprite__letter-icon"></div>
                                        </aside>
                                        <div class="b-contacts__text">
                                            <span>villabella.vista@com.ua</span>
                                        </div>
                                    </div>
                                </div>                        
                            </div>                        
                        </div>                        
                    </div>
                </div>
            </section>
            <footer class="b-main__footer b-footer">
                <div class="g-wrap container-fluid">
                    <div class="row">
                        <nav class="b-footer__nav col-xs-12 col-sm-5 col-md-5">
                            <div class="b-nav__list">
                                <ul class="b-nav__block">
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Главная</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Номера</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Галерея</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Услуги</a></li>
                                </ul>
                                <ul class="b-nav__block">
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Цены на отдых</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Новости</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Отдых в Карпатах</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Контакты</a></li>
                                </ul>
                                <ul class="b-nav__block">
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Отзывы</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Галерея</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Сезон</a></li>
                                    <li class="b-nav__item"><a href="#" class="b-footer__link">Бронирование</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="b-footer__contacts col-xs-12 col-sm-5 col-md-5">
                            <div class="b-contacts_footer">
                                <div class="b-contact b-contact__address">
                                    <span>Наши контакты:</span><br>
                                    <span>Буковель,</span><br>
                                    <span>пос.Поляница</span><br>
                                    <span>ул. Стаища, 274</span>
                                </div>
                                <div class="b-contact">
                                    <div class="b-phones_preText">Тел:</div>
                                    <div class="b-contact__phones b-phones">
                                        <span>+38 097 098 90 80</span><br>
                                        <span>+38 066 881 98 89</span><br>
                                        <span>+38 067 310 67 76</span>
                                    </div>
                                    <div class="b-contact__email">
                                        <span>E-mail:&nbsp;</span>
                                        <span class="b-email">villabella.vista@com.ua</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-footer__social b-social col-xs-12 col-sm-2 col-md-2">
                            <div class="b-social__logo logos-sprite logos-sprite__logoFooter"></div>
                            <div class="b-social__networks">
                                <a href="#" class="b-social__link"><div class="icons-sprite icons-sprite__socFacebook"></div></a>
                                <a href="#" class="b-social__link"><div class="icons-sprite icons-sprite__socGoogle"></div></a>
                                <a href="#" class="b-social__link"><div class="icons-sprite icons-sprite__socTwitter"></div></a>
                                <a href="#" class="b-social__link"><div class="icons-sprite icons-sprite__socVimeo"></div></a>
                            </div>
                        </div>
                        <div class="b-developers g-clearfix col-xs-12">
                            <span>Разработано в&nbsp;</span>
                            <a href="#" class="b-developers__logo logos-sprite logos-sprite__seo-studio"></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        
        <!--<script src="../js/jquery-3.1.1.js"></script>
        <script src="../js/jquery-ui.js"></script>
        <script src="../js/jquery.selectric.js"></script>
        <script src="../js/slick.min.js"></script>
        <script src="../fancybox/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>
        <script src="../fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script src="../fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        <script src="../js/main.js"></script>-->
        <!--[if IE 9]>
            <script>
                $('[placeholder]').focus(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                        input.removeClass('placeholder');
                    }
                }).blur(function() {
                    var input = $(this);
                    if (input.val() == '' || input.val() == input.attr('placeholder')) {
                        input.addClass('placeholder');
                        input.val(input.attr('placeholder'));
                    }
                }).blur();
                $('[placeholder]').parents('form').submit(function() {
                    $(this).find('[placeholder]').each(function() {
                        var input = $(this);
                        if (input.val() == input.attr('placeholder')) {
                            input.val('');
                        }
                    })
                });
            </script>
        <![endif]-->
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>