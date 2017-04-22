<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Веб разработчик Бондаренко Анатолий (создание сайтов), Харьков</title>
	<meta name="description" content="Веб разработка под ключ сайтов (создание сайтов) в Харькове: адаптивные и мобильные веб сайты, интернет-магазин, сайт компании, Landing Page, сайт-визитка, SEO"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
 	<link type="images/x-icon" rel="shortcut icon" href="image/favicon1.ico" />
	<link href="css/main.css" rel="stylesheet">	
	<link href="css/Footer.css" rel="stylesheet">
	<link href="css/Header.css" rel="stylesheet">
	<link href="css/HomePage.css" rel="stylesheet">
</head>
<body class="homepage">
    <?php require_once "blocks/header-block.php"; ?>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(image/slide0.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Бондаренко Анатолий</h1>
                                    <h2 class="animation animated-item-2">Web разработчик</h2>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="image/design1.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(image/slide1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Реализация любых креативных Web идей</h1>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="image/design1.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(image/slide2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">С нами Вы всегда будете на высоте </h1>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="image/design1.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="middle">
        <div class="container">
            <div class="row middle-container">
				<div class="center wow fadeInDown">
					<h2>НАВЫКИ</h2>
					<p class="lead">Любые сайты "под ключ", как с нуля, так и с использованием CMS</p>
				</div>
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
						<div class="progress-wrap">
                            <h3>HTML 5</h3>
                            <div class="progress">
                              <div class="progress-bar color1" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                               <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>
						<div class="progress-wrap">
                            <h3>CSS 3</h3>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>
						<div class="progress-wrap">
                            <h3>Bootstrap 3</h3>
                            <div class="progress">
                              <div class="progress-bar color3" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <h3>LESS</h3>
                            <div class="progress">
                              <div class="progress-bar  color4" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                              </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <h3>Responsive design</h3>
                            <div class="progress">
                              <div class="progress-bar color5" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <h3>JavaScript</h3>
                            <div class="progress">
                              <div class="progress-bar color6" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                <span class="bar-width">70%</span>
                              </div>
                            </div>
                        </div>
					<div class="progress-wrap">
                            <h3>jQuery</h3>
                            <div class="progress">
                              <div class="progress-bar color7" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                              </div>
                            </div>
                        </div>

				</div>
				</div>
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
					    <div class="progress-wrap">
                            <h3>Php 5</h3>
                            <div class="progress">
                              <div class="progress-bar color8" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                              </div>
                            </div>
                        </div>
						<div class="progress-wrap">
                            <h3>MySQL</h3>
                            <div class="progress">
                              <div class="progress-bar color9" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                               <span class="bar-width">75%</span>
                              </div>
                            </div>
                        </div>
						<div class="progress-wrap">
                            <h3>WordPress</h3>
                            <div class="progress">
                              <div class="progress-bar color10" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                              </div>
                            </div>
                        </div>
						<div class="progress-wrap">
                            <h3>Joomla</h3>
                            <div class="progress">
                              <div class="progress-bar color11" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                              </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <h3>OpenCart </h3>
                            <div class="progress">
                              <div class="progress-bar  color12" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                              </div>

                            </div>
                        </div>
                        <div style="display: none;"  class="progress-wrap">
                            <h3>1C-Битрикс</h3>
                            <div class="progress">
                              <div class="progress-bar color13" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                <span class="bar-width">70%</span>
                              </div>
                            </div>
                        </div>
                        <div style="display: none;"  class="progress-wrap">
                            <h3>ModX</h3>
                            <div class="progress">
                              <div class="progress-bar color14" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                <span class="bar-width">70%</span>
                              </div>
                            </div>
                        </div>
						<div style="display: none;"  class="progress-wrap">
                            <h3>Drupal</h3>
                            <div class="progress">
                              <div class="progress-bar color15" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                <span class="bar-width">70%</span>
                              </div>
                            </div>
                        </div>
						<div style="display: none;"  class="progress-wrap">
                            <h3>Magento</h3>
                            <div class="progress">
                              <div class="progress-bar color19" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                <span class="bar-width">70%</span>
                              </div>
                            </div>
                        </div>
                        <div  style="display: none;"  class="progress-wrap">
                            <h3>Yii PHP Framework</h3>
                            <div class="progress">
                              <div class="progress-bar color16" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                <span class="bar-width">70%</span>
                              </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <h3>SEO</h3>
                            <div class="progress">
                              <div class="progress-bar color17" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>
						<div class="progress-wrap">
                            <h3>Photoshop</h3>
                            <div class="progress">
                              <div class="progress-bar color18" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                              </div>
                            </div>
                        </div>
						
                    </div>
				</div>
			</div>
        </div><!--/.container-->
    </section><!--/#middle-->
    <?php require_once "blocks/portfolio-block.php"; ?>
    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>УСЛУГИ</h2>
                <p class="lead">Любые сайты "под ключ", как с нуля, так и с использованием CMS</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="image/services/services3.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Создание сайтов "под ключ", SEO</h3>
                            <p>Цена зависит от сроков и сложности проекта</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="image/services/services5.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Адаптивные и мобильные сайты</h3>
                            <p>Цена зависит от сроков и сложности проекта</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="image/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Разработка Landing Page</h3>
                            <p>Цена зависит от сроков и сложности проекта</p>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="image/services/services4.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Создание сайта компании</h3>
                            <p>Цена зависит от сроков и сложности проекта</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="image/services/services2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Создание сайта-визитки</h3>
                            <p>Цена зависит от сроков и сложности проекта</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="image/services/services6.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Разработка интернет-магазинов</h3>
                            <p>Цена зависит от сроков и сложности проекта</p>
                        </div>
                    </div>
                </div>                                                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

	

	<section>
        <div class="container">
			<div class="row">
				<div class="center wow fadeInDown">
					<h2>ПОЧЕМУ ЗАКАЗЧИКИ ВЫБИРАЮТ МЕНЯ?</h2>
				</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInDown">
                    <div class="accordion">
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                   Делаю качественно 
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                Все созданные сайты проверяются на корректность отображения на устройствах (ноутбуках, планшетах, телефонах) с различным разрешением. Замечания клиентов всегда учитываются. Проект считается закрытым, если выложен в интернет и функционирует без "багов".
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
								Говорю сразу цену
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Цену обсуждаем перед началом выполнения с учетом сроков проекта и сложности функциональной части.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                   Все делаю в срок
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Срок исполнения обговаривается сразу. При условии представления необходимых материалов заказчиком, срок выполнения проекта не изменяется с течением времени.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Консультирую бесплатно
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                                В связи с тем, что не все заказчики имели ранее опыт работы с сайтами, в течении первой недели работы сайта консультирую бесплатно.
                              </div>
                            </div>
                          </div>
						  
						  <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1">
                                  Низкие цены
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFive1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Цены значительно ниже, чем у конкурентов.
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->
		
	
    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>ЧЕРТЫ ХАРАКТЕРА</h2>
                <p class="lead">Коммуникабельность, целеустремленность, ответственное отношение к своим обязанностям, отзывчивость и готовность помочь, постоянное совершенствование своих знаний, желание обеспечить высокую производительность и качество работы, творческий подход к решению проблем..</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-lg-6 col-md-6 col-sm-6  col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Работоспособность</h2>
                            <h3>Готов работать 24 часа в сутка, 7 дней в неделю</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-lg-6 col-md-6 col-sm-6  col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Настойчивость</h2>
                            <h3>Стремюсь всегда достигнуть 100% результата</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-lg-6 col-md-6 col-sm-6  col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Опыт</h2>
                            <h3>Более 2-х лет в web разработке</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-lg-6 col-md-6 col-sm-6  col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Исполнительность</h2>
                            <h3>Выполняю все пожелания клиента в срок</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-lg-6 col-md-6 col-sm-6  col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cogs"></i>
							<h2>Профессионализм</h2>
                            <h3>Клиент всегда остается доволен</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-lg-6 col-md-6 col-sm-6  col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-heart"></i>
                            <h2>Дружелюбие</h2>
                            <h3>Нахожу контакт со всеми клиентами</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->
    <?php require_once "blocks/aboutUsPage-part-block.php"; ?>
	<?php require_once "blocks/callme-block.php"; ?>
    <?php require_once "blocks/footer-block.php"; ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script> <!--Съезжающие экраны-->
</body>
</html>