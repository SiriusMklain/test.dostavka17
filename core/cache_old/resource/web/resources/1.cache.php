<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => 'Congratulations!',
    'description' => '',
    'alias' => 'index',
    'alias_visible' => 1,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<p>You have successfully installed MODX Revolution [[++settings_version]]!</p>
<p>Now that MODX is installed you can login to the manager to create your templates, manage content and install third party extras to add functionality to your website.</p>
<h2>New to MODX?</h2>
<p>Pages on a MODX site are called <a href="https://docs.modx.com/current/en/building-sites/resources">Resources</a>, and are visible on the left-hand side of the manager in the Resources tab. Resources can be nested under other resources, making it easy to create a tree of resources. There are different types of resources for different use cases.</p>
<p>Building your website is done through a combination of <strong>Templates</strong>, <strong>Template Variables</strong>, <strong>Chunks</strong>, <strong>Snippets</strong> and <strong>Plugins</strong>. Collectively these are known as <strong>Elements</strong>, and can also be found in the left-hand side of the manager, in the Elements tab.</p>
<p><a href="https://docs.modx.com/current/en/building-sites/elements/templates">Templates</a> contain the outer markup of any page. Each resource can only be assigned to a single template at a time. By adding <a href="https://docs.modx.com/current/en/building-sites/elements/template-variables">Template Variables</a> to a template, you can add custom fields for any resource using that particular template.</p>
<p>With <a href="https://docs.modx.com/current/en/building-sites/elements/chunks">Chunks</a> you can share parts of the markup, such as a header, across different templates. <a href="https://docs.modx.com/current/en/building-sites/elements/snippets">Snippets</a> are pieces of PHP that return dynamic content, such as summaries of other resources or the current date. With snippets, you will often use Chunks to mark up the pieces of content it returns, instead of mixing the PHP and HTML.</p>
<p>Finally, <a href="https://docs.modx.com/current/en/extending-modx/plugins">Plugins</a> enable more advanced features by hooking into the extensive events system provided by MODX.</p>
<p>To learn more about MODX, be sure to check out the <a href="https://docs.modx.com/current/en/getting-started">Getting Started</a> section in the official documentation.</p>',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1610717128,
    'editedby' => 1,
    'editedon' => 1610811180,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'image_slider1' => 
    array (
      0 => 'image_slider1',
      1 => 'assets/images/banner-bg-3.jpg',
      2 => 'default',
      3 => NULL,
      4 => 'image',
    ),
    'image_slider2' => 
    array (
      0 => 'image_slider2',
      1 => 'assets/images/banner-bg-2.jpg',
      2 => 'default',
      3 => NULL,
      4 => 'image',
    ),
    'image_slider3' => 
    array (
      0 => 'image_slider3',
      1 => 'assets/images/banner-bg-4.jpg',
      2 => 'default',
      3 => NULL,
      4 => 'image',
    ),
    '_content' => '<!doctype html>
<html lang="ru">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Главная - [[++sitename]]</title>
    <base href="[[!++site_url]]">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/89ceaa8d93.js" crossorigin="anonymous"></script>


    <!--====== flaticon css ======-->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!--====== odometer css ======-->
    <link rel="stylesheet" href="assets/css/odometer.min.css">

    <!--====== animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="assets/css/nice-select.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">


</head>


<body>

    <!--====== OFFCANVAS MENU PART START ======-->

        <div class="off_canvars_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
                        </div>
                        
                        <div id="menu" class="text-left ">
                                <ul class="offcanvas_main_menu"><li class="menu-item-has-children">
                                    <a>Главная</a><li class="menu-item-has-children "><a href="index.php?id=3" >Контакты</a></li><li class="menu-item-has-children "><a href="index.php?id=4" >О нас</a></li><li class="menu-item-has-children "><a href="index.php?id=5" >Личный кабинет</a></li><li class="menu-item-has-children">
                                    <a>Услуги</a><ul class="sub-menu">
                                        <li class="menu-item-has-children "><a href="index.php?id=8" >Доставка</a></li><li class="menu-item-has-children "><a href="index.php?id=10" >Монтаж</a></li><li class="menu-item-has-children "><a href="index.php?id=11" >Замер</a></li>
                                    </ul><li class="menu-item-has-children "><a href="index.php?id=12" >Вопросы и ответы</a></li></ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="mailto:zamer@info.ru"><i class="fa fa-envelope-o"></i> zamer@info.ru</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--====== OFFCANVAS MENU PART ENDS ======-->

    <!--====== HEADER PART START ======-->

        <div class="preloader">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-items d-flex justify-content-between align-items-center">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                            </div>
                            <div class="header-top-info d-none d-md-block">
                                <ul>
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <span>почта</span>
                                        <a href="mailto:zamer@info.ru">zamer@info.ru</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-calling"></i>
                                        <span>Телефон</span>
                                        <a href="tel:+74956404101">+7(495) 640-41-01</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-header-item d-flex justify-content-between align-items-center">
                            <div class="main-header-menus  d-flex">
                                <div class="header-btn">
                                    <a href="index.html">Стекловозов</a>
                                </div>
                                <div class="header-menu d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a href="index.php?id=1">Главная</a>
                                        </li>
                                        <li>
                                            <a href="index.php?id=4">О Нас</a>
                                        </li>
                                        <li>
                                            <a>Услуги</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.php?id=11">Замер</a></li>
                                                <li><a href="index.php?id=8">Доставка</a></li>
                                                <li><a href="index.php?id=10">Монтаж</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="index.php?id=12">Вопросы</a>
                                        </li>
                                        <li>
                                            <a href="index.php?id=3">Контакты</a>
                                        </li>
                                        <li>
                                            <a href="index.php?id=5">Личный кабинет</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-laguage d-flex align-items-center">
                                <div class="toggle-btn ml-30 canvas_open">
                                    <i class="fa fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </header>


    <!--====== HEADER PART ENDS ======-->

    <!--====== BANNER PART START ======-->

        <section class="banner-slide">
        <div class="banner-area bg_cover d-flex align-items-center" style="background-image: url(assets/images/banner-bg-3.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="banner-content text-center">
                            <span data-animation="fadeInDown" data-delay="1s">Доставка</span>
                            <h3 data-animation="fadeInDown" data-delay=".1s" class="title">Быстрая доставка</h3>
                            <a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="index.php?id=8">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area bg_cover d-flex align-items-center" style="background-image: url(assets/images/banner-bg-2.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="banner-content text-center">
                            <span data-animation="fadeInDown" data-delay="1s">Выезд замерщика</span>
                            <h3 data-animation="fadeInDown" data-delay=".1s" class="title">Точный замер</h3>
                            <a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="index.php?id=11">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area bg_cover d-flex align-items-center" style="background-image: url(assets/images/banner-bg-4.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="banner-content text-center">
                            <span data-animation="fadeInDown" data-delay="1s">Монтаж</span>
                            <h3 data-animation="fadeInDown" data-delay=".1s" class="title">Монтажные работы</h3>
                            <a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="index.php?id=10">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>


    <!--====== BANNER PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

        <section class="services-area">
        <div class="container">
            <div class="services-bg">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-1.jpg" alt="services">
                            <div class="icon">
                                <i class="flaticon-under-construction"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Замер</h4>
                                <p>Наши специалисты помогут вам сделать точный замер</p>
                                <a href="index.php?id=11">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-2.jpg" alt="services">
                            <div class="icon">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Доставка</h4>
                                <p>Доставка осуществляется круглосуточно 7 дней...</p>
                                <a href="index.php?id=8">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-3.jpg" alt="services">
                            <div class="icon">
                                <i class="flaticon-layout"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Монтаж</h4>
                                <p>Осуществление монтажных работ квалифицированными...</p>
                                <a href="index.php?id=10">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-4.jpg" alt="services">
                            <div class="icon">
                                <i class="flaticon-under-construction-1"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Напишите нам</h4>
                                <p>Если у вас есть вопросы, пожалуйста напишите нам</p>
                                <a href="index.php?id=3">Написать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-shape">
            <img src="assets/images/shape/shape-7.png" alt="">
        </div>
    </section>


    <!--====== SERVICES PART ENDS ======-->

    <!--====== SOLUTION PART START ======-->

        <section class="solution-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="solution-thumb animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <img src="assets/images/solution-thumb.jpg" alt="">
                        <div class="shape">
                            <img src="assets/images/shape/shape-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="solution-item">
                        <div class="solution-header">
                            <span>Преимущества наших профессионалов</span>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-7">
                                <div class="solution-list-content">
                                    <p>Московская зеркальная фабрика
                                        доверяет перевозку и монтаж
                                        зеркальной и стекольной продукции
                                        профессионалам</p>
                                    <ul>
                                        <li><i class="flaticon-tick"></i>Страховка изделий на время транспортировки.</li>
                                        <li><i class="flaticon-tick"></i>Проверка качества на складе изготовителя.</li>
                                        <li><i class="flaticon-tick"></i>Специализированная упаковка продукции.</li>
                                        <li><i class="flaticon-tick"></i>Страховка включена в стоимость доставки.</li>
                                        <li><i class="flaticon-tick"></i>Прием товара без присутствия клиента на складе.</li>
                                        <li><i class="flaticon-tick"></i>Автомобили оборудованы спец. крепежной системой.</li>
                                        <li><i class="flaticon-tick"></i>Круглосуточная доставка 7 дней в неделю.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="solution-shape animated wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
            <img src="assets/images/shape/shape-13.png" alt="">
        </div>
    </section>


    <!--====== SOLUTION PART ENDS ======-->

    <!--====== FAQ PART START ======-->
    <hr>

        <section class="faq-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="faq-accordion">
                        <div class="accrodion-grp animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms" data-grp-name="faq-accrodion">
<!--                            <div class="accrodion active ">-->
<!--                                <div class="accrodion-inner">-->
<!--                                    <div class="accrodion-title">-->
<!--                                        <h4>Процесс получения заказов</h4>-->
<!--                                    </div>-->
<!--                                    <div class="accrodion-content">-->
<!--                                        <div class="inner">-->
<!--                                            <p>Во избежание претензий со стороны получателя по доставке и для корректного заполнения бухгалтерских документов, наш водитель передает товар на следующих условиях:</p>-->
<!--                                        </div>&lt;!&ndash; /.inner &ndash;&gt;-->
<!--                                    </div>-->
<!--                                </div>&lt;!&ndash; /.accrodion-inner &ndash;&gt;-->
<!--                            </div>-->
                            <div class="o-container">
                                <h1 class="o-header__title">Процесс получения заказов</h1>
                                <p class="delivery_condition">Во избежание претензий со стороны получателя по доставке и для корректного заполнения бухгалтерских документов, наш водитель передает товар на следующих условиях:</p>
                                <br>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Получатель - юридическое лицо</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>1. Получатель ставит печать и подпись в накладной, которую забирает водитель. Название и ИНН компании на накладной и в печати должны совпадать.
                                                <br>

                                                <br> 2. За отсутствием печати товар может быть передан по доверенности от получателя. Доверенность водитель забирает с собой. На доверенности водитель проверяет:
                                                <br>

                                                <br>- срок действия доверенности на текущий день не просрочен,
                                                <br>- сверяет паспортные данные доверенного лица с его паспортом,
                                                <br>- сверяет подписи доверенного лица в доверенности с его подписью в накладной,
                                                <br>- сверяет названия компании на доверенности и в ее печати с названием компании в накладной.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Получатель - физическое лицо</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>1. Водитель сверяет ФИО получателя в накладной с любым документом, удостоверяющим его личность.
                                                <br>


                                                <br>2. Если получатель не является плательщиком, указанным в накладной, то он:


                                                <br>- предоставляет рукописную доверенность от плательщика, в которой водитель сверяет ФИО с документом, удостоверяющим личность. Доверенность водитель забирает с собой.,
                                                <br>- либо передает водителю в обмен на товар оригинальную банковскую квитанцию об оплате, предварительно переданную ему плательщиком. Квитанцию экспедитор забирает с собой.
                                                <br>
                                                <br>Если любой из вышеперечисленных пунктов не соответствует, товар не передается.
                                                <br>

                                                <br>Время ожидания водителя по приезде на адрес покупателя составляет 15 минут. Если груз не принят, водитель уезжает, оплата за осуществленную доставку не возвращается.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Договор доставки</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>1.1 Дата доставки назначается клиенту в соответствии с тарифной сеткой, оплаченной клиентом. О дате доставки ЗАКАЗЧИК уведомляется дополнительно (за сутки до планируемой даты доставки).
                                            <br>

                                            <br>1.2 ИСПОЛНИТЕЛЬ несёт ответственность за механические повреждения заказа до его передачи ЗАКАЗЧИКУ.
                                            <br>

                                            <br>1.3 При доставке, подъёме изделий необходимо личное присутствие ЗАКАЗЧИКА, либо лица, уполномоченного ЗАКАЗЧИКОМ.
                                            <br>

                                            <br>1.4 ЗАКАЗЧИК обязан обеспечить беспрепятственный доступ транспортных средств, осуществляющих доставку Изделий, для разгрузки не далее 10 метров от места разгрузки, в случае платной стоянки и иных обстоятельств, возлагающих на ИСПОЛНИТЕЛЯ дополнительные расходы, такие расходы незамедлительно оплачиваются ЗАКАЗЧИКОМ в объеме 100%.</p>
                                            <br>
                                            <a href="https://docs.google.com/document/d/1Y7r9ZrbW3-JF2nBEN8JJ7CqchhOqVR3Y6mLd-n-kpXI/edit?usp=sharing" target="_blank">Читать далее</a>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--====== FAQ PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

        <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
            <div class="footer-main">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget mt-30">
                            <div class="footer-title pb-30">
                                <h4 class="title">Контакты</h4>
                            </div>
                            <div class="footer-about-content">
                                <div class="email">
                                    <a href="mailto:zamer@info.ru">zamer@info.ru</a>
                                </div>
                                <div class="call">
                                    <a href="tel:+74956404101">+7(495) 640-41-01</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget mt-30 ml-30">
                            <div class="footer-title pb-20">
                                <h4 class="title">Услуги</h4>
                            </div>
                            <div class="footer-about-list d-flex">
                                <ul class="mr-70"><li><a href="index.php?id=8" ><i class="fa fa-angle-right"></i>Доставка</a></li><li><a href="index.php?id=10" ><i class="fa fa-angle-right"></i>Монтаж</a></li><li><a href="index.php?id=11" ><i class="fa fa-angle-right"></i>Замер</a></li></ul>
                                <!--ul class="mr-70">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Petroleum and Gas</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Industrial Construction</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Chemical Research</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Mechanical Engineering</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Power Energies</a></li>
                                </ul-->
                            </div>
                        </div>
                </div>
            </div>
            <div class="footer-copyright text-center">
                <p>© Все права защищены 2020 <a target="blank_" href="https://www.layerdrops.com">Zamer.info</a></p>
            </div>
        </div>
        <div class="footer-shape-1">
            <img src="assets/images/shape/shape-5.png" alt="">
        </div>
        <div class="footer-shape-2  animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
            <img src="assets/images/shape/shape-6.png" alt="">
        </div>
    </footer>
    
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="fa fa-angle-double-up"></i>
                    <i class="fa fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>



    <!--====== FOOTER PART ENDS ======-->
    

        <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.0.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== odometer js ======-->
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <!--====== wow js ======-->
<!--     <script src="assets/js/wow.js"></script> -->

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    
        <!--====== Main js ======-->
    <script src="assets/js/tabs.js"></script>
    <script>
        var myTabs = tabs({
            el: \'#tabs\',
            tabNavigationLinks: \'.c-tabs-nav__link\',
            tabContentContainers: \'.c-tab\'
        });

        myTabs.init();
    </script>


    <script src="assets/js/tab.js"></script>
    <script>
        var myTabs = tab({
            el: \'#tab\',
            tabNavigationLinks: \'.c-tabs-nav__link\',
            tabContentContainers: \'.c-tab\'
        });

        myTabs.init();
    </script>





</body>

</html>
',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$head]]' => '<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Главная - [[++sitename]]</title>
    <base href="[[!++site_url]]">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/89ceaa8d93.js" crossorigin="anonymous"></script>


    <!--====== flaticon css ======-->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!--====== odometer css ======-->
    <link rel="stylesheet" href="assets/css/odometer.min.css">

    <!--====== animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="assets/css/nice-select.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">


</head>
',
    '[[pdoMenu?
                                	&parents=`0`
                                	&tplOuter=`@INLINE <ul class="offcanvas_main_menu">[[+wrapper]]</ul>`
                                	&tpl=`@INLINE <li class="menu-item-has-children "><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>`
                                	&tplParentRow=`@INLINE <li class="menu-item-has-children">
                                    <a>[[+menutitle]]</a>[[+wrapper]]`
                                    &tplInner=`@INLINE <ul class="sub-menu">
                                        [[+wrapper]]
                                    </ul>`
                                    &tplHere=`@INLINE <li class="menu-item-has-children">
                                    <a>[[+menutitle]]</a>[[+wrapper]]`
                                ]]' => '<ul class="offcanvas_main_menu"><li class="menu-item-has-children">
                                    <a>Главная</a><li class="menu-item-has-children "><a href="index.php?id=3" >Контакты</a></li><li class="menu-item-has-children "><a href="index.php?id=4" >О нас</a></li><li class="menu-item-has-children "><a href="index.php?id=5" >Личный кабинет</a></li><li class="menu-item-has-children">
                                    <a>Услуги</a><ul class="sub-menu">
                                        <li class="menu-item-has-children "><a href="index.php?id=8" >Доставка</a></li><li class="menu-item-has-children "><a href="index.php?id=10" >Монтаж</a></li><li class="menu-item-has-children "><a href="index.php?id=11" >Замер</a></li>
                                    </ul><li class="menu-item-has-children "><a href="index.php?id=12" >Вопросы и ответы</a></li></ul>',
    '[[$offcanvas_menu]]' => '    <div class="off_canvars_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
                        </div>
                        
                        <div id="menu" class="text-left ">
                                <ul class="offcanvas_main_menu"><li class="menu-item-has-children">
                                    <a>Главная</a><li class="menu-item-has-children "><a href="index.php?id=3" >Контакты</a></li><li class="menu-item-has-children "><a href="index.php?id=4" >О нас</a></li><li class="menu-item-has-children "><a href="index.php?id=5" >Личный кабинет</a></li><li class="menu-item-has-children">
                                    <a>Услуги</a><ul class="sub-menu">
                                        <li class="menu-item-has-children "><a href="index.php?id=8" >Доставка</a></li><li class="menu-item-has-children "><a href="index.php?id=10" >Монтаж</a></li><li class="menu-item-has-children "><a href="index.php?id=11" >Замер</a></li>
                                    </ul><li class="menu-item-has-children "><a href="index.php?id=12" >Вопросы и ответы</a></li></ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="mailto:zamer@info.ru"><i class="fa fa-envelope-o"></i> zamer@info.ru</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
',
    '[[$header]]' => '    <div class="preloader">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-items d-flex justify-content-between align-items-center">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                            </div>
                            <div class="header-top-info d-none d-md-block">
                                <ul>
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <span>почта</span>
                                        <a href="mailto:zamer@info.ru">zamer@info.ru</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-calling"></i>
                                        <span>Телефон</span>
                                        <a href="tel:+74956404101">+7(495) 640-41-01</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-header-item d-flex justify-content-between align-items-center">
                            <div class="main-header-menus  d-flex">
                                <div class="header-btn">
                                    <a href="index.html">Стекловозов</a>
                                </div>
                                <div class="header-menu d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a href="index.php?id=1">Главная</a>
                                        </li>
                                        <li>
                                            <a href="index.php?id=4">О Нас</a>
                                        </li>
                                        <li>
                                            <a>Услуги</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.php?id=11">Замер</a></li>
                                                <li><a href="index.php?id=8">Доставка</a></li>
                                                <li><a href="index.php?id=10">Монтаж</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="index.php?id=12">Вопросы</a>
                                        </li>
                                        <li>
                                            <a href="index.php?id=3">Контакты</a>
                                        </li>
                                        <li>
                                            <a href="index.php?id=5">Личный кабинет</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-laguage d-flex align-items-center">
                                <div class="toggle-btn ml-30 canvas_open">
                                    <i class="fa fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </header>
',
    '[[$slider_banner_part]]' => '    <section class="banner-slide">
        <div class="banner-area bg_cover d-flex align-items-center" style="background-image: url(assets/images/banner-bg-3.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="banner-content text-center">
                            <span data-animation="fadeInDown" data-delay="1s">Доставка</span>
                            <h3 data-animation="fadeInDown" data-delay=".1s" class="title">Быстрая доставка</h3>
                            <a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="index.php?id=8">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area bg_cover d-flex align-items-center" style="background-image: url(assets/images/banner-bg-2.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="banner-content text-center">
                            <span data-animation="fadeInDown" data-delay="1s">Выезд замерщика</span>
                            <h3 data-animation="fadeInDown" data-delay=".1s" class="title">Точный замер</h3>
                            <a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="index.php?id=11">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area bg_cover d-flex align-items-center" style="background-image: url(assets/images/banner-bg-4.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="banner-content text-center">
                            <span data-animation="fadeInDown" data-delay="1s">Монтаж</span>
                            <h3 data-animation="fadeInDown" data-delay=".1s" class="title">Монтажные работы</h3>
                            <a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="index.php?id=10">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
',
    '[[$service_part_start]]' => '    <section class="services-area">
        <div class="container">
            <div class="services-bg">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-1.jpg" alt="services">
                            <div class="icon">
                                <i class="flaticon-under-construction"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Замер</h4>
                                <p>Наши специалисты помогут вам сделать точный замер</p>
                                <a href="index.php?id=11">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-2.jpg" alt="services">
                            <div class="icon">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Доставка</h4>
                                <p>Доставка осуществляется круглосуточно 7 дней...</p>
                                <a href="index.php?id=8">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-3.jpg" alt="services">
                            <div class="icon">
                                <i class="flaticon-layout"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Монтаж</h4>
                                <p>Осуществление монтажных работ квалифицированными...</p>
                                <a href="index.php?id=10">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-4.jpg" alt="services">
                            <div class="icon">
                                <i class="flaticon-under-construction-1"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Напишите нам</h4>
                                <p>Если у вас есть вопросы, пожалуйста напишите нам</p>
                                <a href="index.php?id=3">Написать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-shape">
            <img src="assets/images/shape/shape-7.png" alt="">
        </div>
    </section>
',
    '[[$solution_part]]' => '    <section class="solution-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="solution-thumb animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <img src="assets/images/solution-thumb.jpg" alt="">
                        <div class="shape">
                            <img src="assets/images/shape/shape-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="solution-item">
                        <div class="solution-header">
                            <span>Преимущества наших профессионалов</span>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-7">
                                <div class="solution-list-content">
                                    <p>Московская зеркальная фабрика
                                        доверяет перевозку и монтаж
                                        зеркальной и стекольной продукции
                                        профессионалам</p>
                                    <ul>
                                        <li><i class="flaticon-tick"></i>Страховка изделий на время транспортировки.</li>
                                        <li><i class="flaticon-tick"></i>Проверка качества на складе изготовителя.</li>
                                        <li><i class="flaticon-tick"></i>Специализированная упаковка продукции.</li>
                                        <li><i class="flaticon-tick"></i>Страховка включена в стоимость доставки.</li>
                                        <li><i class="flaticon-tick"></i>Прием товара без присутствия клиента на складе.</li>
                                        <li><i class="flaticon-tick"></i>Автомобили оборудованы спец. крепежной системой.</li>
                                        <li><i class="flaticon-tick"></i>Круглосуточная доставка 7 дней в неделю.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="solution-shape animated wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
            <img src="assets/images/shape/shape-13.png" alt="">
        </div>
    </section>
',
    '[[$faq_part_main]]' => '    <section class="faq-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="faq-accordion">
                        <div class="accrodion-grp animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms" data-grp-name="faq-accrodion">
<!--                            <div class="accrodion active ">-->
<!--                                <div class="accrodion-inner">-->
<!--                                    <div class="accrodion-title">-->
<!--                                        <h4>Процесс получения заказов</h4>-->
<!--                                    </div>-->
<!--                                    <div class="accrodion-content">-->
<!--                                        <div class="inner">-->
<!--                                            <p>Во избежание претензий со стороны получателя по доставке и для корректного заполнения бухгалтерских документов, наш водитель передает товар на следующих условиях:</p>-->
<!--                                        </div>&lt;!&ndash; /.inner &ndash;&gt;-->
<!--                                    </div>-->
<!--                                </div>&lt;!&ndash; /.accrodion-inner &ndash;&gt;-->
<!--                            </div>-->
                            <div class="o-container">
                                <h1 class="o-header__title">Процесс получения заказов</h1>
                                <p class="delivery_condition">Во избежание претензий со стороны получателя по доставке и для корректного заполнения бухгалтерских документов, наш водитель передает товар на следующих условиях:</p>
                                <br>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Получатель - юридическое лицо</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>1. Получатель ставит печать и подпись в накладной, которую забирает водитель. Название и ИНН компании на накладной и в печати должны совпадать.
                                                <br>

                                                <br> 2. За отсутствием печати товар может быть передан по доверенности от получателя. Доверенность водитель забирает с собой. На доверенности водитель проверяет:
                                                <br>

                                                <br>- срок действия доверенности на текущий день не просрочен,
                                                <br>- сверяет паспортные данные доверенного лица с его паспортом,
                                                <br>- сверяет подписи доверенного лица в доверенности с его подписью в накладной,
                                                <br>- сверяет названия компании на доверенности и в ее печати с названием компании в накладной.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Получатель - физическое лицо</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>1. Водитель сверяет ФИО получателя в накладной с любым документом, удостоверяющим его личность.
                                                <br>


                                                <br>2. Если получатель не является плательщиком, указанным в накладной, то он:


                                                <br>- предоставляет рукописную доверенность от плательщика, в которой водитель сверяет ФИО с документом, удостоверяющим личность. Доверенность водитель забирает с собой.,
                                                <br>- либо передает водителю в обмен на товар оригинальную банковскую квитанцию об оплате, предварительно переданную ему плательщиком. Квитанцию экспедитор забирает с собой.
                                                <br>
                                                <br>Если любой из вышеперечисленных пунктов не соответствует, товар не передается.
                                                <br>

                                                <br>Время ожидания водителя по приезде на адрес покупателя составляет 15 минут. Если груз не принят, водитель уезжает, оплата за осуществленную доставку не возвращается.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Договор доставки</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>1.1 Дата доставки назначается клиенту в соответствии с тарифной сеткой, оплаченной клиентом. О дате доставки ЗАКАЗЧИК уведомляется дополнительно (за сутки до планируемой даты доставки).
                                            <br>

                                            <br>1.2 ИСПОЛНИТЕЛЬ несёт ответственность за механические повреждения заказа до его передачи ЗАКАЗЧИКУ.
                                            <br>

                                            <br>1.3 При доставке, подъёме изделий необходимо личное присутствие ЗАКАЗЧИКА, либо лица, уполномоченного ЗАКАЗЧИКОМ.
                                            <br>

                                            <br>1.4 ЗАКАЗЧИК обязан обеспечить беспрепятственный доступ транспортных средств, осуществляющих доставку Изделий, для разгрузки не далее 10 метров от места разгрузки, в случае платной стоянки и иных обстоятельств, возлагающих на ИСПОЛНИТЕЛЯ дополнительные расходы, такие расходы незамедлительно оплачиваются ЗАКАЗЧИКОМ в объеме 100%.</p>
                                            <br>
                                            <a href="https://docs.google.com/document/d/1Y7r9ZrbW3-JF2nBEN8JJ7CqchhOqVR3Y6mLd-n-kpXI/edit?usp=sharing" target="_blank">Читать далее</a>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
',
    '[[pdoMenu?
                                	&parents=`0`
                                	&tplOuter=`@INLINE <ul class="mr-70">[[+wrapper]]</ul>`
                                	&resources=`11,8,10`
                                	&tpl=`@INLINE <li><a href="[[+link]]" [[+attributes]]><i class="fa fa-angle-right"></i>[[+menutitle]]</a>[[+wrapper]]</li>`
                                	
                                ]]' => '<ul class="mr-70"><li><a href="index.php?id=8" ><i class="fa fa-angle-right"></i>Доставка</a></li><li><a href="index.php?id=10" ><i class="fa fa-angle-right"></i>Монтаж</a></li><li><a href="index.php?id=11" ><i class="fa fa-angle-right"></i>Замер</a></li></ul>',
    '[[$footer]]' => '    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
            <div class="footer-main">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget mt-30">
                            <div class="footer-title pb-30">
                                <h4 class="title">Контакты</h4>
                            </div>
                            <div class="footer-about-content">
                                <div class="email">
                                    <a href="mailto:zamer@info.ru">zamer@info.ru</a>
                                </div>
                                <div class="call">
                                    <a href="tel:+74956404101">+7(495) 640-41-01</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget mt-30 ml-30">
                            <div class="footer-title pb-20">
                                <h4 class="title">Услуги</h4>
                            </div>
                            <div class="footer-about-list d-flex">
                                <ul class="mr-70"><li><a href="index.php?id=8" ><i class="fa fa-angle-right"></i>Доставка</a></li><li><a href="index.php?id=10" ><i class="fa fa-angle-right"></i>Монтаж</a></li><li><a href="index.php?id=11" ><i class="fa fa-angle-right"></i>Замер</a></li></ul>
                                <!--ul class="mr-70">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Petroleum and Gas</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Industrial Construction</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Chemical Research</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Mechanical Engineering</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Power Energies</a></li>
                                </ul-->
                            </div>
                        </div>
                </div>
            </div>
            <div class="footer-copyright text-center">
                <p>© Все права защищены 2020 <a target="blank_" href="https://www.layerdrops.com">Zamer.info</a></p>
            </div>
        </div>
        <div class="footer-shape-1">
            <img src="assets/images/shape/shape-5.png" alt="">
        </div>
        <div class="footer-shape-2  animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
            <img src="assets/images/shape/shape-6.png" alt="">
        </div>
    </footer>
    
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="fa fa-angle-double-up"></i>
                    <i class="fa fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>

',
    '[[$scripts]]' => '    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.0.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== odometer js ======-->
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <!--====== wow js ======-->
<!--     <script src="assets/js/wow.js"></script> -->

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    
        <!--====== Main js ======-->
    <script src="assets/js/tabs.js"></script>
    <script>
        var myTabs = tabs({
            el: \'#tabs\',
            tabNavigationLinks: \'.c-tabs-nav__link\',
            tabContentContainers: \'.c-tab\'
        });

        myTabs.init();
    </script>


    <script src="assets/js/tab.js"></script>
    <script>
        var myTabs = tab({
            el: \'#tab\',
            tabNavigationLinks: \'.c-tabs-nav__link\',
            tabContentContainers: \'.c-tab\'
        });

        myTabs.init();
    </script>


',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>[[*pagetitle]] - [[++sitename]]</title>
    <base href="[[!++site_url]]">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/89ceaa8d93.js" crossorigin="anonymous"></script>


    <!--====== flaticon css ======-->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!--====== odometer css ======-->
    <link rel="stylesheet" href="assets/css/odometer.min.css">

    <!--====== animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="assets/css/nice-select.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">


</head>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>[[*pagetitle]] - [[++sitename]]</title>
    <base href="[[!++site_url]]">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/89ceaa8d93.js" crossorigin="anonymous"></script>


    <!--====== flaticon css ======-->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!--====== odometer css ======-->
    <link rel="stylesheet" href="assets/css/odometer.min.css">

    <!--====== animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="assets/css/nice-select.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">


</head>
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'offcanvas_menu' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'offcanvas_menu',
          'description' => 'меню мобилки',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '    <div class="off_canvars_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
                        </div>
                        
                        <div id="menu" class="text-left ">
                                [[pdoMenu?
                                	&parents=`0`
                                	&tplOuter=`@INLINE <ul class="offcanvas_main_menu">[[+wrapper]]</ul>`
                                	&tpl=`@INLINE <li class="menu-item-has-children "><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>`
                                	&tplParentRow=`@INLINE <li class="menu-item-has-children">
                                    <a>[[+menutitle]]</a>[[+wrapper]]`
                                    &tplInner=`@INLINE <ul class="sub-menu">
                                        [[+wrapper]]
                                    </ul>`
                                    &tplHere=`@INLINE <li class="menu-item-has-children">
                                    <a>[[+menutitle]]</a>[[+wrapper]]`
                                ]]
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="mailto:zamer@info.ru"><i class="fa fa-envelope-o"></i> zamer@info.ru</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <div class="off_canvars_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
                        </div>
                        
                        <div id="menu" class="text-left ">
                                [[pdoMenu?
                                	&parents=`0`
                                	&tplOuter=`@INLINE <ul class="offcanvas_main_menu">[[+wrapper]]</ul>`
                                	&tpl=`@INLINE <li class="menu-item-has-children "><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>`
                                	&tplParentRow=`@INLINE <li class="menu-item-has-children">
                                    <a>[[+menutitle]]</a>[[+wrapper]]`
                                    &tplInner=`@INLINE <ul class="sub-menu">
                                        [[+wrapper]]
                                    </ul>`
                                    &tplHere=`@INLINE <li class="menu-item-has-children">
                                    <a>[[+menutitle]]</a>[[+wrapper]]`
                                ]]
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="mailto:zamer@info.ru"><i class="fa fa-envelope-o"></i> zamer@info.ru</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '    <div class="preloader">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-items d-flex justify-content-between align-items-center">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                            </div>
                            <div class="header-top-info d-none d-md-block">
                                <ul>
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <span>почта</span>
                                        <a href="mailto:zamer@info.ru">zamer@info.ru</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-calling"></i>
                                        <span>Телефон</span>
                                        <a href="tel:+74956404101">+7(495) 640-41-01</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-header-item d-flex justify-content-between align-items-center">
                            <div class="main-header-menus  d-flex">
                                <div class="header-btn">
                                    <a href="index.html">Стекловозов</a>
                                </div>
                                <div class="header-menu d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a href="[[~1]]">Главная</a>
                                        </li>
                                        <li>
                                            <a href="[[~4]]">О Нас</a>
                                        </li>
                                        <li>
                                            <a>Услуги</a>
                                            <ul class="sub-menu">
                                                <li><a href="[[~11]]">Замер</a></li>
                                                <li><a href="[[~8]]">Доставка</a></li>
                                                <li><a href="[[~10]]">Монтаж</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="[[~12]]">Вопросы</a>
                                        </li>
                                        <li>
                                            <a href="[[~3]]">Контакты</a>
                                        </li>
                                        <li>
                                            <a href="[[~5]]">Личный кабинет</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-laguage d-flex align-items-center">
                                <div class="toggle-btn ml-30 canvas_open">
                                    <i class="fa fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </header>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <div class="preloader">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-items d-flex justify-content-between align-items-center">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                            </div>
                            <div class="header-top-info d-none d-md-block">
                                <ul>
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <span>почта</span>
                                        <a href="mailto:zamer@info.ru">zamer@info.ru</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-calling"></i>
                                        <span>Телефон</span>
                                        <a href="tel:+74956404101">+7(495) 640-41-01</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-header-item d-flex justify-content-between align-items-center">
                            <div class="main-header-menus  d-flex">
                                <div class="header-btn">
                                    <a href="index.html">Стекловозов</a>
                                </div>
                                <div class="header-menu d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a href="[[~1]]">Главная</a>
                                        </li>
                                        <li>
                                            <a href="[[~4]]">О Нас</a>
                                        </li>
                                        <li>
                                            <a>Услуги</a>
                                            <ul class="sub-menu">
                                                <li><a href="[[~11]]">Замер</a></li>
                                                <li><a href="[[~8]]">Доставка</a></li>
                                                <li><a href="[[~10]]">Монтаж</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="[[~12]]">Вопросы</a>
                                        </li>
                                        <li>
                                            <a href="[[~3]]">Контакты</a>
                                        </li>
                                        <li>
                                            <a href="[[~5]]">Личный кабинет</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-laguage d-flex align-items-center">
                                <div class="toggle-btn ml-30 canvas_open">
                                    <i class="fa fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </header>
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'slider_banner_part' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'slider_banner_part',
          'description' => 'банер на главной странице',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '    <section class="banner-slide">
        <div class="banner-area bg_cover d-flex align-items-center" style="background-image: url([[*image_slider1]]);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="banner-content text-center">
                            <span data-animation="fadeInDown" data-delay="1s">Доставка</span>
                            <h3 data-animation="fadeInDown" data-delay=".1s" class="title">Быстрая доставка</h3>
                            <a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="[[~8]]">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area bg_cover d-flex align-items-center" style="background-image: url([[*image_slider2]]);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="banner-content text-center">
                            <span data-animation="fadeInDown" data-delay="1s">Выезд замерщика</span>
                            <h3 data-animation="fadeInDown" data-delay=".1s" class="title">Точный замер</h3>
                            <a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="[[~11]]">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area bg_cover d-flex align-items-center" style="background-image: url([[*image_slider3]]);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="banner-content text-center">
                            <span data-animation="fadeInDown" data-delay="1s">Монтаж</span>
                            <h3 data-animation="fadeInDown" data-delay=".1s" class="title">Монтажные работы</h3>
                            <a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="[[~10]]">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <section class="banner-slide">
        <div class="banner-area bg_cover d-flex align-items-center" style="background-image: url([[*image_slider1]]);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="banner-content text-center">
                            <span data-animation="fadeInDown" data-delay="1s">Доставка</span>
                            <h3 data-animation="fadeInDown" data-delay=".1s" class="title">Быстрая доставка</h3>
                            <a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="[[~8]]">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area bg_cover d-flex align-items-center" style="background-image: url([[*image_slider2]]);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="banner-content text-center">
                            <span data-animation="fadeInDown" data-delay="1s">Выезд замерщика</span>
                            <h3 data-animation="fadeInDown" data-delay=".1s" class="title">Точный замер</h3>
                            <a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="[[~11]]">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area bg_cover d-flex align-items-center" style="background-image: url([[*image_slider3]]);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="banner-content text-center">
                            <span data-animation="fadeInDown" data-delay="1s">Монтаж</span>
                            <h3 data-animation="fadeInDown" data-delay=".1s" class="title">Монтажные работы</h3>
                            <a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="[[~10]]">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'service_part_start' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'service_part_start',
          'description' => 'первый блок после банера на главной',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '    <section class="services-area">
        <div class="container">
            <div class="services-bg">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-1.jpg" alt="services">
                            <div class="icon">
                                <i class="flaticon-under-construction"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Замер</h4>
                                <p>Наши специалисты помогут вам сделать точный замер</p>
                                <a href="[[~11]]">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-2.jpg" alt="services">
                            <div class="icon">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Доставка</h4>
                                <p>Доставка осуществляется круглосуточно 7 дней...</p>
                                <a href="[[~8]]">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-3.jpg" alt="services">
                            <div class="icon">
                                <i class="flaticon-layout"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Монтаж</h4>
                                <p>Осуществление монтажных работ квалифицированными...</p>
                                <a href="[[~10]]">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-4.jpg" alt="services">
                            <div class="icon">
                                <i class="flaticon-under-construction-1"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Напишите нам</h4>
                                <p>Если у вас есть вопросы, пожалуйста напишите нам</p>
                                <a href="[[~3]]">Написать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-shape">
            <img src="assets/images/shape/shape-7.png" alt="">
        </div>
    </section>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <section class="services-area">
        <div class="container">
            <div class="services-bg">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-1.jpg" alt="services">
                            <div class="icon">
                                <i class="flaticon-under-construction"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Замер</h4>
                                <p>Наши специалисты помогут вам сделать точный замер</p>
                                <a href="[[~11]]">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-2.jpg" alt="services">
                            <div class="icon">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Доставка</h4>
                                <p>Доставка осуществляется круглосуточно 7 дней...</p>
                                <a href="[[~8]]">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-3.jpg" alt="services">
                            <div class="icon">
                                <i class="flaticon-layout"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Монтаж</h4>
                                <p>Осуществление монтажных работ квалифицированными...</p>
                                <a href="[[~10]]">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="services-item mt-70">
                            <img src="assets/images/services-4.jpg" alt="services">
                            <div class="icon">
                                <i class="flaticon-under-construction-1"></i>
                            </div>
                            <div class="services-overlay">
                                <h4 class="title">Напишите нам</h4>
                                <p>Если у вас есть вопросы, пожалуйста напишите нам</p>
                                <a href="[[~3]]">Написать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-shape">
            <img src="assets/images/shape/shape-7.png" alt="">
        </div>
    </section>
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'solution_part' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'solution_part',
          'description' => 'четвертый блок на главной',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '    <section class="solution-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="solution-thumb animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <img src="assets/images/solution-thumb.jpg" alt="">
                        <div class="shape">
                            <img src="assets/images/shape/shape-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="solution-item">
                        <div class="solution-header">
                            <span>Преимущества наших профессионалов</span>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-7">
                                <div class="solution-list-content">
                                    <p>Московская зеркальная фабрика
                                        доверяет перевозку и монтаж
                                        зеркальной и стекольной продукции
                                        профессионалам</p>
                                    <ul>
                                        <li><i class="flaticon-tick"></i>Страховка изделий на время транспортировки.</li>
                                        <li><i class="flaticon-tick"></i>Проверка качества на складе изготовителя.</li>
                                        <li><i class="flaticon-tick"></i>Специализированная упаковка продукции.</li>
                                        <li><i class="flaticon-tick"></i>Страховка включена в стоимость доставки.</li>
                                        <li><i class="flaticon-tick"></i>Прием товара без присутствия клиента на складе.</li>
                                        <li><i class="flaticon-tick"></i>Автомобили оборудованы спец. крепежной системой.</li>
                                        <li><i class="flaticon-tick"></i>Круглосуточная доставка 7 дней в неделю.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="solution-shape animated wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
            <img src="assets/images/shape/shape-13.png" alt="">
        </div>
    </section>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <section class="solution-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="solution-thumb animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <img src="assets/images/solution-thumb.jpg" alt="">
                        <div class="shape">
                            <img src="assets/images/shape/shape-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="solution-item">
                        <div class="solution-header">
                            <span>Преимущества наших профессионалов</span>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-7">
                                <div class="solution-list-content">
                                    <p>Московская зеркальная фабрика
                                        доверяет перевозку и монтаж
                                        зеркальной и стекольной продукции
                                        профессионалам</p>
                                    <ul>
                                        <li><i class="flaticon-tick"></i>Страховка изделий на время транспортировки.</li>
                                        <li><i class="flaticon-tick"></i>Проверка качества на складе изготовителя.</li>
                                        <li><i class="flaticon-tick"></i>Специализированная упаковка продукции.</li>
                                        <li><i class="flaticon-tick"></i>Страховка включена в стоимость доставки.</li>
                                        <li><i class="flaticon-tick"></i>Прием товара без присутствия клиента на складе.</li>
                                        <li><i class="flaticon-tick"></i>Автомобили оборудованы спец. крепежной системой.</li>
                                        <li><i class="flaticon-tick"></i>Круглосуточная доставка 7 дней в неделю.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="solution-shape animated wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
            <img src="assets/images/shape/shape-13.png" alt="">
        </div>
    </section>
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'faq_part_main' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'faq_part_main',
          'description' => 'последний блок на главной',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '    <section class="faq-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="faq-accordion">
                        <div class="accrodion-grp animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms" data-grp-name="faq-accrodion">
<!--                            <div class="accrodion active ">-->
<!--                                <div class="accrodion-inner">-->
<!--                                    <div class="accrodion-title">-->
<!--                                        <h4>Процесс получения заказов</h4>-->
<!--                                    </div>-->
<!--                                    <div class="accrodion-content">-->
<!--                                        <div class="inner">-->
<!--                                            <p>Во избежание претензий со стороны получателя по доставке и для корректного заполнения бухгалтерских документов, наш водитель передает товар на следующих условиях:</p>-->
<!--                                        </div>&lt;!&ndash; /.inner &ndash;&gt;-->
<!--                                    </div>-->
<!--                                </div>&lt;!&ndash; /.accrodion-inner &ndash;&gt;-->
<!--                            </div>-->
                            <div class="o-container">
                                <h1 class="o-header__title">Процесс получения заказов</h1>
                                <p class="delivery_condition">Во избежание претензий со стороны получателя по доставке и для корректного заполнения бухгалтерских документов, наш водитель передает товар на следующих условиях:</p>
                                <br>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Получатель - юридическое лицо</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>1. Получатель ставит печать и подпись в накладной, которую забирает водитель. Название и ИНН компании на накладной и в печати должны совпадать.
                                                <br>

                                                <br> 2. За отсутствием печати товар может быть передан по доверенности от получателя. Доверенность водитель забирает с собой. На доверенности водитель проверяет:
                                                <br>

                                                <br>- срок действия доверенности на текущий день не просрочен,
                                                <br>- сверяет паспортные данные доверенного лица с его паспортом,
                                                <br>- сверяет подписи доверенного лица в доверенности с его подписью в накладной,
                                                <br>- сверяет названия компании на доверенности и в ее печати с названием компании в накладной.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Получатель - физическое лицо</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>1. Водитель сверяет ФИО получателя в накладной с любым документом, удостоверяющим его личность.
                                                <br>


                                                <br>2. Если получатель не является плательщиком, указанным в накладной, то он:


                                                <br>- предоставляет рукописную доверенность от плательщика, в которой водитель сверяет ФИО с документом, удостоверяющим личность. Доверенность водитель забирает с собой.,
                                                <br>- либо передает водителю в обмен на товар оригинальную банковскую квитанцию об оплате, предварительно переданную ему плательщиком. Квитанцию экспедитор забирает с собой.
                                                <br>
                                                <br>Если любой из вышеперечисленных пунктов не соответствует, товар не передается.
                                                <br>

                                                <br>Время ожидания водителя по приезде на адрес покупателя составляет 15 минут. Если груз не принят, водитель уезжает, оплата за осуществленную доставку не возвращается.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Договор доставки</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>1.1 Дата доставки назначается клиенту в соответствии с тарифной сеткой, оплаченной клиентом. О дате доставки ЗАКАЗЧИК уведомляется дополнительно (за сутки до планируемой даты доставки).
                                            <br>

                                            <br>1.2 ИСПОЛНИТЕЛЬ несёт ответственность за механические повреждения заказа до его передачи ЗАКАЗЧИКУ.
                                            <br>

                                            <br>1.3 При доставке, подъёме изделий необходимо личное присутствие ЗАКАЗЧИКА, либо лица, уполномоченного ЗАКАЗЧИКОМ.
                                            <br>

                                            <br>1.4 ЗАКАЗЧИК обязан обеспечить беспрепятственный доступ транспортных средств, осуществляющих доставку Изделий, для разгрузки не далее 10 метров от места разгрузки, в случае платной стоянки и иных обстоятельств, возлагающих на ИСПОЛНИТЕЛЯ дополнительные расходы, такие расходы незамедлительно оплачиваются ЗАКАЗЧИКОМ в объеме 100%.</p>
                                            <br>
                                            <a href="https://docs.google.com/document/d/1Y7r9ZrbW3-JF2nBEN8JJ7CqchhOqVR3Y6mLd-n-kpXI/edit?usp=sharing" target="_blank">Читать далее</a>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <section class="faq-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="faq-accordion">
                        <div class="accrodion-grp animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms" data-grp-name="faq-accrodion">
<!--                            <div class="accrodion active ">-->
<!--                                <div class="accrodion-inner">-->
<!--                                    <div class="accrodion-title">-->
<!--                                        <h4>Процесс получения заказов</h4>-->
<!--                                    </div>-->
<!--                                    <div class="accrodion-content">-->
<!--                                        <div class="inner">-->
<!--                                            <p>Во избежание претензий со стороны получателя по доставке и для корректного заполнения бухгалтерских документов, наш водитель передает товар на следующих условиях:</p>-->
<!--                                        </div>&lt;!&ndash; /.inner &ndash;&gt;-->
<!--                                    </div>-->
<!--                                </div>&lt;!&ndash; /.accrodion-inner &ndash;&gt;-->
<!--                            </div>-->
                            <div class="o-container">
                                <h1 class="o-header__title">Процесс получения заказов</h1>
                                <p class="delivery_condition">Во избежание претензий со стороны получателя по доставке и для корректного заполнения бухгалтерских документов, наш водитель передает товар на следующих условиях:</p>
                                <br>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Получатель - юридическое лицо</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>1. Получатель ставит печать и подпись в накладной, которую забирает водитель. Название и ИНН компании на накладной и в печати должны совпадать.
                                                <br>

                                                <br> 2. За отсутствием печати товар может быть передан по доверенности от получателя. Доверенность водитель забирает с собой. На доверенности водитель проверяет:
                                                <br>

                                                <br>- срок действия доверенности на текущий день не просрочен,
                                                <br>- сверяет паспортные данные доверенного лица с его паспортом,
                                                <br>- сверяет подписи доверенного лица в доверенности с его подписью в накладной,
                                                <br>- сверяет названия компании на доверенности и в ее печати с названием компании в накладной.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Получатель - физическое лицо</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>1. Водитель сверяет ФИО получателя в накладной с любым документом, удостоверяющим его личность.
                                                <br>


                                                <br>2. Если получатель не является плательщиком, указанным в накладной, то он:


                                                <br>- предоставляет рукописную доверенность от плательщика, в которой водитель сверяет ФИО с документом, удостоверяющим личность. Доверенность водитель забирает с собой.,
                                                <br>- либо передает водителю в обмен на товар оригинальную банковскую квитанцию об оплате, предварительно переданную ему плательщиком. Квитанцию экспедитор забирает с собой.
                                                <br>
                                                <br>Если любой из вышеперечисленных пунктов не соответствует, товар не передается.
                                                <br>

                                                <br>Время ожидания водителя по приезде на адрес покупателя составляет 15 минут. Если груз не принят, водитель уезжает, оплата за осуществленную доставку не возвращается.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Договор доставки</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>1.1 Дата доставки назначается клиенту в соответствии с тарифной сеткой, оплаченной клиентом. О дате доставки ЗАКАЗЧИК уведомляется дополнительно (за сутки до планируемой даты доставки).
                                            <br>

                                            <br>1.2 ИСПОЛНИТЕЛЬ несёт ответственность за механические повреждения заказа до его передачи ЗАКАЗЧИКУ.
                                            <br>

                                            <br>1.3 При доставке, подъёме изделий необходимо личное присутствие ЗАКАЗЧИКА, либо лица, уполномоченного ЗАКАЗЧИКОМ.
                                            <br>

                                            <br>1.4 ЗАКАЗЧИК обязан обеспечить беспрепятственный доступ транспортных средств, осуществляющих доставку Изделий, для разгрузки не далее 10 метров от места разгрузки, в случае платной стоянки и иных обстоятельств, возлагающих на ИСПОЛНИТЕЛЯ дополнительные расходы, такие расходы незамедлительно оплачиваются ЗАКАЗЧИКОМ в объеме 100%.</p>
                                            <br>
                                            <a href="https://docs.google.com/document/d/1Y7r9ZrbW3-JF2nBEN8JJ7CqchhOqVR3Y6mLd-n-kpXI/edit?usp=sharing" target="_blank">Читать далее</a>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 9,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
            <div class="footer-main">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget mt-30">
                            <div class="footer-title pb-30">
                                <h4 class="title">Контакты</h4>
                            </div>
                            <div class="footer-about-content">
                                <div class="email">
                                    <a href="mailto:zamer@info.ru">zamer@info.ru</a>
                                </div>
                                <div class="call">
                                    <a href="tel:+74956404101">+7(495) 640-41-01</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget mt-30 ml-30">
                            <div class="footer-title pb-20">
                                <h4 class="title">Услуги</h4>
                            </div>
                            <div class="footer-about-list d-flex">
                                [[pdoMenu?
                                	&parents=`0`
                                	&tplOuter=`@INLINE <ul class="mr-70">[[+wrapper]]</ul>`
                                	&resources=`11,8,10`
                                	&tpl=`@INLINE <li><a href="[[+link]]" [[+attributes]]><i class="fa fa-angle-right"></i>[[+menutitle]]</a>[[+wrapper]]</li>`
                                	
                                ]]
                                <!--ul class="mr-70">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Petroleum and Gas</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Industrial Construction</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Chemical Research</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Mechanical Engineering</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Power Energies</a></li>
                                </ul-->
                            </div>
                        </div>
                </div>
            </div>
            <div class="footer-copyright text-center">
                <p>© Все права защищены 2020 <a target="blank_" href="https://www.layerdrops.com">Zamer.info</a></p>
            </div>
        </div>
        <div class="footer-shape-1">
            <img src="assets/images/shape/shape-5.png" alt="">
        </div>
        <div class="footer-shape-2  animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
            <img src="assets/images/shape/shape-6.png" alt="">
        </div>
    </footer>
    
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="fa fa-angle-double-up"></i>
                    <i class="fa fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>

',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
            <div class="footer-main">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget mt-30">
                            <div class="footer-title pb-30">
                                <h4 class="title">Контакты</h4>
                            </div>
                            <div class="footer-about-content">
                                <div class="email">
                                    <a href="mailto:zamer@info.ru">zamer@info.ru</a>
                                </div>
                                <div class="call">
                                    <a href="tel:+74956404101">+7(495) 640-41-01</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget mt-30 ml-30">
                            <div class="footer-title pb-20">
                                <h4 class="title">Услуги</h4>
                            </div>
                            <div class="footer-about-list d-flex">
                                [[pdoMenu?
                                	&parents=`0`
                                	&tplOuter=`@INLINE <ul class="mr-70">[[+wrapper]]</ul>`
                                	&resources=`11,8,10`
                                	&tpl=`@INLINE <li><a href="[[+link]]" [[+attributes]]><i class="fa fa-angle-right"></i>[[+menutitle]]</a>[[+wrapper]]</li>`
                                	
                                ]]
                                <!--ul class="mr-70">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Petroleum and Gas</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Industrial Construction</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Chemical Research</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Mechanical Engineering</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Power Energies</a></li>
                                </ul-->
                            </div>
                        </div>
                </div>
            </div>
            <div class="footer-copyright text-center">
                <p>© Все права защищены 2020 <a target="blank_" href="https://www.layerdrops.com">Zamer.info</a></p>
            </div>
        </div>
        <div class="footer-shape-1">
            <img src="assets/images/shape/shape-5.png" alt="">
        </div>
        <div class="footer-shape-2  animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
            <img src="assets/images/shape/shape-6.png" alt="">
        </div>
    </footer>
    
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="fa fa-angle-double-up"></i>
                    <i class="fa fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>

',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'scripts' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'scripts',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.0.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== odometer js ======-->
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <!--====== wow js ======-->
<!--     <script src="assets/js/wow.js"></script> -->

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    
        <!--====== Main js ======-->
    <script src="assets/js/tabs.js"></script>
    <script>
        var myTabs = tabs({
            el: \'#tabs\',
            tabNavigationLinks: \'.c-tabs-nav__link\',
            tabContentContainers: \'.c-tab\'
        });

        myTabs.init();
    </script>


    <script src="assets/js/tab.js"></script>
    <script>
        var myTabs = tab({
            el: \'#tab\',
            tabNavigationLinks: \'.c-tabs-nav__link\',
            tabContentContainers: \'.c-tab\'
        });

        myTabs.init();
    </script>


',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.0.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== odometer js ======-->
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <!--====== wow js ======-->
<!--     <script src="assets/js/wow.js"></script> -->

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    
        <!--====== Main js ======-->
    <script src="assets/js/tabs.js"></script>
    <script>
        var myTabs = tabs({
            el: \'#tabs\',
            tabNavigationLinks: \'.c-tabs-nav__link\',
            tabContentContainers: \'.c-tab\'
        });

        myTabs.init();
    </script>


    <script src="assets/js/tab.js"></script>
    <script>
        var myTabs = tab({
            el: \'#tab\',
            tabNavigationLinks: \'.c-tabs-nav__link\',
            tabContentContainers: \'.c-tab\'
        });

        myTabs.init();
    </script>


',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 17,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Уровень генерируемого меню.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ начальных узлов меню. Полезно при указании более одного "parents".',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список шаблонов, через запятую, для фильтрации результатов. Если id шаблона начинается с дефиса, ресурсы с ним исключается из выборки.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ неопубликованных документов, если у пользователя есть на это разрешение.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Спрятать неактивные ветки меню.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс id="" для выставления идентификатора в чанк.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для первого пункта меню.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс последнего пункта меню.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для активного пункта меню.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс категории меню.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс одной строки меню.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс обертки меню.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс внутренних ссылок меню.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс уровня меню. Например, если укажите "level", то будет "level1", "level2" и т.д.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс текущего документа в меню.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс документа-ссылки.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка всего блока меню.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк текущего документа',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка внутренних пунктов меню. Если пуст - будет использовать "tplOuter".',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления одного пункта меню.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного пункта меню.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Специальный чанк оформления категории. Категория - это документ с потомками и или нулевым шаблоном, или с атрибутом "rel=\\"category\\"".',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления корневого пункта, при условии, что включен "displayStart".',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите, какие разрешения нужно проверять у пользователя при выводе документов.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id документа, текущего для генерируемого меню. Нужно указывать только если скрипт сам его неверно определяет, например при выводе меню из чанка другого сниппета.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования ссылок: "uri" для подстановки поля uri документа (очень быстро) или параметр для modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вывести точное количество активных потомков документа в плейсхолдер [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'image_slider1' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'image',
          'name' => 'image_slider1',
          'caption' => '',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'image_slider2' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'image',
          'name' => 'image_slider2',
          'caption' => '',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'image_slider3' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'image',
          'name' => 'image_slider3',
          'caption' => '',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);