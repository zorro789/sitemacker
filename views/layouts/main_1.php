<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\LtAppAsset;

AppAsset::register($this);
LtAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<html>
    <head>
        <title>Home</title>
        <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
        <meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
        <?= Html::csrfMetaTags() ?>
     <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>  
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
       
    </head>
    
    <body>
        <?php $this->beginBody() ?>
        <div class="page-wrap">
            
            <!-- header -->
            <header class="header header__style-02">
                <div class="container">
                    <div class="header__logo"><a href="index.html"><img src="web/img/logo.png" alt=""/></a></div>
                    <div class="header__toogleGroup">
                        <div class="header__chooseLanguage">
                                        
                                        <!-- dropdown -->
                                        <div class="dropdown" data-init="dropdown"><a class="dropdown__toggle" href="javascript:void(0)">EN <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <div class="dropdown__content" data-position="right">
                                                <ul class="list-style-none">
                                                    <li><a href="#">EN</a></li>
                                                    <li><a href="#">GE2</a></li>
                                                    <li><a href="#">VI2</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- End / dropdown -->
                                        
                        </div>
                        <div class="search-form">
                            <div class="search-form__toggle"><i class="ti-search"></i></div>
                            <div class="search-form__form">
                                                
                                                <!-- form-search -->
                                                <div class="form-search">
                                                    <form>
                                                        <input class="form-control" type="text" placeholder="Hit enter to search or ESC to close"/>
                                                    </form>
                                                </div><!-- End / form-search -->
                                                
                            </div>
                        </div>
                    </div>
                    
                    <!-- consult-nav -->
                    <nav class="consult-nav">
                        
                        <!-- consult-menu -->
                        <ul class="consult-menu">
                            <li class="current-menu-item"><a href="index.html">Home</a>
                            </li>
                            <li><a href="about.html">about</a>
                            </li>
                            <li class="menu-item-has-children"><a href="#">page</a>
                                <ul class="sub-menu">
                                    <li><a href="comming-soon.html">Comming Soon</a>
                                    </li>
                                    <li><a href="404.html">404</a>
                                    </li>
                                    <li><a href="typography.html">Typography</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="service.html">services</a>
                            </li>
                            <li class="menu-item-has-children"><a href="project.html">project</a>
                                <ul class="sub-menu">
                                    <li><a href="project-detail.html">Project detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="blog.html">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-detail.html">Blog detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contact</a>
                            </li>
                        </ul><!-- consult-menu -->
                        
                        <div class="navbar-toggle"><span></span><span></span><span></span></div>
                    </nav><!-- End / consult-nav -->
                    
                </div>
            </header><!-- End / header -->
            
            <!-- Content-->
            <div class="md-content">
                
                <!-- slider -->
                <div class="slider">
                    
                    <!-- carousel__element owl-carousel -->
                    <div class="carousel__element owl-carousel" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":0, "autoplay": true, "autoplayTimeout": 900000}'>
                        <div class="slider__item" style="background-image: url('web/img/site.png');">
                            <div class="md-tb">
                                <div class="md-tb__cell">
                                    <div class="slider__content">
                                        <div class="container">
                                            <h2>Сайт-визитка за 150 рублей</h2>
                                            <p>будет содержать практически все опции типового сайта.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item" style="background-image: url('web/img/Landing.jpg');">
                            <div class="md-tb">
                                <div class="md-tb__cell">
                                    <div class="slider__content">
                                        <div class="container">
                                            <h2>Лендинг пейдж (Landing Page) за 150 рублей</h2>
                                            <p>позволит обеспечить полноценное продвижение ваших товаров в сети.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item" style="background-image: url('web/img/Catalog.png');">
                            <div class="md-tb">
                                <div class="md-tb__cell">
                                    <div class="slider__content">
                                        <div class="container">
                                            <h2>Сайт-каталог за 300 рублей</h2>
                                            <p>даст возможность создать интернет-магазин для повышения объема продаж Вашей продукции.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End / carousel__element owl-carousel -->
                    
                </div><!-- End / slider -->
                
                <!-- Service-->
                
                <!-- Section -->
                <section class="md-section" style="background-color:#f7f7f7;padding:0;">
                    <div class="container">
                        <div class="textbox-group">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 ">
                                    
                                    <!-- textbox -->
                                    <div class="textbox">
                                        <div class="textbox__image"><a href="#"><img src="web/img/services/Visit.jpg" alt=""/></a></div>
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><a href="#">Сайт-визитка</a></h2>
                                            <div class="textbox__description">Сайт-визитка ­– интернет-ресурс, который позволяет представить в сети Интернет информацию о себе, своем бизнесе, месте и времени его работы.
Как правило, подобный сайт состоит из одной или нескольких страниц.</div>
                                        </div>
                                    </div><!-- End / textbox -->
                                    
                                </div>
                                <div class="col-md-4 col-lg-4 ">
                                    
                                    <!-- textbox -->
                                    <div class="textbox">
                                        <div class="textbox__image"><a href="#"><img src="web/img/services/workplace1jpeg.jpg" alt=""/></a></div>
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><a href="#">Лендинг пейдж</a></h2>
                                            <div class="textbox__description">Landing Page (посадочная страница) – интернет-ресурс, который позволяет стимулировать посетителей к приобретению того или иного товара.
Как правило, подобный сайт состоит из одной страницы. </div>
                                        </div>
                                    </div><!-- End / textbox -->
                                    
                                </div>
                                <div class="col-md-4 col-lg-4 ">
                                    
                                    <!-- textbox -->
                                    <div class="textbox">
                                        <div class="textbox__image"><a href="#"><img src="web/img/services/Catalog.jpg" alt=""/></a></div>
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><a href="#">Сайт-каталог</a></h2>
                                            <div class="textbox__description">Сайт-каталог – интернет-ресурс, который позволяет разместить на сайте каталог товаров с фотографиями, краткой либо полной информацией о них, рейтингом, ценой, акционными предложениями, скидками и т.д.</div>
                                        </div>
                                    </div><!-- End / textbox -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End / Section -->
                
                <?= $content ?>
                <!-- Section -->
                <section class="md-section" style="background-color:#f7f7f7;padding-top:0;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-lg-8 offset-0 offset-sm-0 offset-md-1 offset-lg-2 ">
                                
                                <!-- iconbox -->
                                <div class="iconbox">
                                    <div class="iconbox__icon"><i class="ti-headphone-alt"></i></div>
                                    <div>
                                        <h2 class="iconbox__title"><a href="#">Best National Locations</a></h2>
                                        
                                        
                                        <div class="iconbox__description">Nam elit ligula, egestas et ornare non, viverra eu justo. Aliquam ornare lectus ut pharetra dictum. Aliquam erat volutpat. In fringilla erat at eros pharetra faucibus. Nunc a magna eu lectus fringilla interdum luctus vitae diam. Morbi ac orci ac dolor pellentesque interdum vel accumsan risus. In ves</div>
                                    </div>
                                </div><!-- End / iconbox -->
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-3 ">
                                
                                <!-- iconbox -->
                                <div class="iconbox iconbox__style-02">
                                    <div class="iconbox__icon"><i class="ti-announcement"></i></div>
                                    <div>
                                        <h2 class="iconbox__title"><a href="#">Brand &amp; Identity</a></h2>
                                        <div class="iconbox__description">Mauris lacinia venenatis dolor sit amet viverra. Integer malesuada nulla neque. Sed rutrum ligula eu</div>
                                    </div>
                                </div><!-- End / iconbox -->
                                
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 ">
                                
                                <!-- iconbox -->
                                <div class="iconbox iconbox__style-02">
                                    <div class="iconbox__icon"><i class="ti-headphone"></i></div>
                                    <div>
                                        <h2 class="iconbox__title"><a href="#">Marketing Planning</a></h2>
                                        <div class="iconbox__description">Etiam non varius justo, vel tempor mi. Nulla facilisi. Fusce at tortor arcu. Suspendisse maximus ac </div>
                                    </div>
                                </div><!-- End / iconbox -->
                                
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 ">
                                
                                <!-- iconbox -->
                                <div class="iconbox iconbox__style-02">
                                    <div class="iconbox__icon"><i class="ti-timer"></i></div>
                                    <div>
                                        <h2 class="iconbox__title"><a href="#">Business Planning</a></h2>
                                        <div class="iconbox__description">Mauris lacinia venenatis dolor sit amet viverra. Integer malesuada nulla neque. Sed rutrum ligula eu</div>
                                    </div>
                                </div><!-- End / iconbox -->
                                
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 ">
                                
                                <!-- iconbox -->
                                <div class="iconbox iconbox__style-02">
                                    <div class="iconbox__icon"><i class="ti-briefcase"></i></div>
                                    <div>
                                        <h2 class="iconbox__title"><a href="#">Email Marketing</a></h2>
                                        <div class="iconbox__description">Suspendisse ac elit vitae est lacinia interdum eu sit amet mauris. Phasellus aliquam nisi sit amet l</div>
                                    </div>
                                </div><!-- End / iconbox -->
                                
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End / Section -->
                
                <!-- About-->
                
                <!-- Section -->
                <section class="md-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 ">
                                
                                <!-- title-01 -->
                                <div class="title-01 title-01__style-03 md-text-left">
                                    <h6 class="title-01__subTitle">about</h6>
                                    <h2 class="title-01__title">We Are The Leaders In This Industry</h2>
                                    <div>Nam suscipit nisi risus, et porttitor metus molestie a. Phasellus id quam id turpis suscipit pretium. Maecenas ultrices, lacus ut accumsan maximus, odio augue rhoncus augue, vulputate maximus mi sapien sed nisl. Sed fermentum congue orci sed lacinia. Nulla nunc purus, consectetur</div>
                                </div><!-- End / title-01 -->
                                
                                <div class="row">
                                    <div class="col-sm-4 ">
                                        
                                        <!-- box-number -->
                                        <div class="box-number">
                                            <div class="box-number__number">
                                                <h2 class="js-counter" data-counter-time="2000" data-counter-delay="10">99</h2>
                                            </div>
                                            <div class="box-number__description">Happy clients</div>
                                        </div><!-- End / box-number -->
                                        
                                    </div>
                                    <div class="col-sm-4 ">
                                        
                                        <!-- box-number -->
                                        <div class="box-number">
                                            <div class="box-number__number">
                                                <h2 class="js-counter" data-counter-time="2000" data-counter-delay="10">1200</h2>
                                            </div>
                                            <div class="box-number__description">Message per Day</div>
                                        </div><!-- End / box-number -->
                                        
                                    </div>
                                    <div class="col-sm-4 ">
                                        
                                        <!-- box-number -->
                                        <div class="box-number">
                                            <div class="box-number__number">
                                                <h2 class="js-counter" data-counter-time="2000" data-counter-delay="10">15</h2>
                                            </div>
                                            <div class="box-number__description">Awards</div>
                                        </div><!-- End / box-number -->
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="js-consult-slider">
                                    
                                    <!-- carousel__element owl-carousel -->
                                    <div class="carousel__element owl-carousel" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":30,"responsive":{"0":{"items":2},"576":{"items":3},"992":{"items":1}}}'>
                                        <div class="image-full"><img src="web/img/image-01.jpg" alt=""></div>
                                        <div class="image-full"><img src="web/img/image-02.jpg" alt=""></div>
                                    </div><!-- End / carousel__element owl-carousel -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End / Section -->
                
                <!-- Contact us-->
                
                <!-- Section -->
                <section class="md-section md-skin-dark js-consult-form" style="background-image:url(&quot;web/img/backgrounds/1.jpg&quot;);">
                    <div class="md-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-0 offset-sm-0 offset-md-0 offset-lg-2 ">
                                
                                <!-- title-01 -->
                                <div class="title-01 title-01__style-02">
                                    <h2 class="title-01__title">Contact With Us via Hot Line</h2>
                                    <div>Sed ante nisl, fermentum et facilisis in, maximus </div>
                                </div><!-- End / title-01 -->
                                
                                <div class="consult-phone">(+88) 242 2323 777</div>
                            </div>
                        </div>
                        
                        <!-- form-01 -->
                        <div class="form-01 consult-form js-consult-form__content">
                            <h2 class="form-01__title">Give Us Your Feedback</h2>
                            <form class="form-01__form">
                                <div class="form__item form__item--03">
                                    <input type="text" name="name" placeholder="Your name"/>
                                </div>
                                <div class="form__item form__item--03">
                                    <input type="text" name="phone" placeholder="Your Email"/>
                                </div>
                                <div class="form__item form__item--03">
                                    <input type="email" name="email" placeholder="Your Email"/>
                                </div>
                                <div class="form__item">
                                    <textarea rows="3" name="Your message" placeholder="Your message"></textarea>
                                </div>
                                <div class="form__button"><a class="btn btn-primary btn-w180" href="#">send message</a>
                                </div>
                            </form>
                        </div><!-- End / form-01 -->
                        
                    </div>
                </section>
                <!-- End / Section -->
                
                <!-- What’s Client Say ?-->
                
                <!-- Section -->
                <section class="md-section" style="padding-bottom:0;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">
                                
                                <!-- title-01 -->
                                <div class="title-01" style="margin-bottom:50px;">
                                    <h2 class="title-01__title">What’s Client Say?</h2>
                                </div><!-- End / title-01 -->
                                
                            </div>
                        </div>
                        <div class="consult-slide">
                            
                            <!-- carousel__element owl-carousel -->
                            <div class="carousel__element owl-carousel" data-options='{"loop":true,"dots":true,"nav":false,"margin":30,"responsive":{"0":{"items":1},"992":{"items":2}}}'>
                                
                                <!-- testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial__info"><a class="testimonial__avatar" href="#"><img src="web/img/avatars/avatar-01.jpg" alt=""/></a>
                                        <h5 class="testimonial__name">Brandon Hanson</h5><span class="testimonial__position">Support</span>
                                    </div>
                                    <div class="testimonial__content">
                                        <div class="testimonial__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet ut lacus a tincidunt. Quisque luctus nibh augue, non ultrices arcu molestie in. In</div>
                                    </div>
                                </div><!-- End / testimonial -->
                                
                                
                                <!-- testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial__info"><a class="testimonial__avatar" href="#"><img src="web/img/avatars/avatar-02.jpg" alt=""/></a>
                                        <h5 class="testimonial__name">Brandon Hanson</h5><span class="testimonial__position">CEO &amp; Founder</span>
                                    </div>
                                    <div class="testimonial__content">
                                        <div class="testimonial__text">Sed ante nisl, fermentum et facilisis in, maximus sed ipsum. Cras hendrerit feugiat eros, ut fringilla nunc finibus sed. Quisque vitae dictum augue, v</div>
                                    </div>
                                </div><!-- End / testimonial -->
                                
                                
                                <!-- testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial__info"><a class="testimonial__avatar" href="#"><img src="web/img/avatars/1.jpg" alt=""/></a>
                                        <h5 class="testimonial__name">Maria Gutierrez</h5><span class="testimonial__position">Designer</span>
                                    </div>
                                    <div class="testimonial__content">
                                        <div class="testimonial__text">Mauris lacinia venenatis dolor sit amet viverra. Integer malesuada nulla neque. Sed rutrum ligula eu sagittis volutpat. Aliquam erat volutpat. Praesen</div>
                                    </div>
                                </div><!-- End / testimonial -->
                                
                            </div><!-- End / carousel__element owl-carousel -->
                            
                        </div>
                    </div>
                </section>
                <!-- End / Section -->
                
                <!-- Our partner-->
                
                <!-- Section -->
                <section class="md-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">
                                
                                <!-- title-01 -->
                                <div class="title-01">
                                    <h2 class="title-01__title">Our Partner</h2>
                                </div><!-- End / title-01 -->
                                
                            </div>
                        </div>
                        
                        <!-- carousel__element owl-carousel -->
                        <div class="carousel__element owl-carousel" data-options='{"loop":true,"dots":false,"nav":true,"margin":30,"responsive":{"0":{"items":2},"768":{"items":3},"992":{"items":5}}}'>
                            
                            <!--  -->
                            <div>
                                <div class="brand-01__image"><img src="web/img/brands/1.png" alt=""/></div>
                            </div><!-- End /  -->
                            
                            
                            <!--  -->
                            <div>
                                <div class="brand-01__image"><img src="web/img/brands/2.png" alt=""/></div>
                            </div><!-- End /  -->
                            
                            
                            <!--  -->
                            <div>
                                <div class="brand-01__image"><img src="web/img/brands/3.png" alt=""/></div>
                            </div><!-- End /  -->
                            
                            
                            <!--  -->
                            <div>
                                <div class="brand-01__image"><img src="web/img/brands/4.png" alt=""/></div>
                            </div><!-- End /  -->
                            
                            
                            <!--  -->
                            <div>
                                <div class="brand-01__image"><img src="web/img/brands/5.png" alt=""/></div>
                            </div><!-- End /  -->
                            
                        </div><!-- End / carousel__element owl-carousel -->
                        
                    </div>
                </section>
                <!-- End / Section -->
                
                <!-- Latest Blogs -->
                
                <!-- Section -->
                <section class="md-section consult-background">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">
                                
                                <!-- title-01 -->
                                <div class="title-01">
                                    <h2 class="title-01__title">Latest Blogs</h2>
                                </div><!-- End / title-01 -->
                                
                            </div>
                        </div>
                        
                        <!-- carousel__element owl-carousel -->
                        <div class="carousel__element owl-carousel" data-options='{"loop":false,"dots":false,"nav":true,"margin":30,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>
                            
                            <!--  -->
                            <div>
                                <div class="post-01__media"><a href="#"><img src="web/img/blogs/related-1.jpg" alt=""/></a>
                                </div>
                                <div>
                                    <ul class="post-01__categories">
                                        <li><a href="#">Services</a></li>
                                    </ul>
                                    <h2 class="post-01__title"><a href="#">Getting Started with Vue.Js</a></h2>
                                    <div class="post-01__time">Nov 16, 2017</div>
                                    <div class="post-01__note">by Bryan Ryan</div>
                                </div>
                            </div><!-- End /  -->
                            
                            
                            <!--  -->
                            <div>
                                <div class="post-01__media"><a href="#"><img src="web/img/blogs/related-2.jpg" alt=""/></a>
                                </div>
                                <div>
                                    <ul class="post-01__categories">
                                        <li><a href="#">Services</a></li>
                                    </ul>
                                    <h2 class="post-01__title"><a href="#">Getting Started with Vue.Js</a></h2>
                                    <div class="post-01__time">Nov 4, 2017</div>
                                    <div class="post-01__note">by Ashley Mills</div>
                                </div>
                            </div><!-- End /  -->
                            
                            
                            <!--  -->
                            <div>
                                <div class="post-01__media"><a href="#"><img src="web/img/blogs/related-3.jpg" alt=""/></a>
                                </div>
                                <div>
                                    <ul class="post-01__categories">
                                        <li><a href="#">Services</a></li>
                                    </ul>
                                    <h2 class="post-01__title"><a href="#">How to Create and Manage SVG Sprites</a></h2>
                                    <div class="post-01__time">Nov 21, 2017</div>
                                    <div class="post-01__note">by Alan Lane</div>
                                </div>
                            </div><!-- End /  -->
                            
                            
                            <!--  -->
                            <div>
                                <div class="post-01__media"><a href="#"><img src="web/img/blogs/related-4.jpg" alt=""/></a>
                                </div>
                                <div>
                                    <ul class="post-01__categories">
                                        <li><a href="#">Business</a></li>
                                    </ul>
                                    <h2 class="post-01__title"><a href="#">Free Sketch Plugins</a></h2>
                                    <div class="post-01__time">Nov 2, 2017</div>
                                    <div class="post-01__note">by Alan Lane</div>
                                </div>
                            </div><!-- End /  -->
                            
                        </div><!-- End / carousel__element owl-carousel -->
                        
                    </div>
                </section>
                <!-- End / Section -->
                
            </div>
            <!-- End / Content-->
            
            <!-- footer -->
            <footer class="footer">
                <div class="footer__main">
                    <div class="row row-eq-height">
                        <div class="col-8 col-sm-7 col-md-9 col-lg-3 ">
                            <div class="footer__item"><a class="consult_logo" href="#"><img src="web/img/logo.png" alt=""/></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet ut lacus a tincidunt.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                            <div class="footer__item">
                                    
                                    <!-- widget-text__widget -->
                                    <section class="widget-text__widget widget">
                                        <div class="widget-text__content">
                                            <ul>
                                                <li><a href="#">Term of Services </a></li>
                                                <li><a href="#">Privacy Policy </a></li>
                                                <li><a href="#">Sitemap </a></li>
                                                <li><a href="#">Help</a></li>
                                            </ul>
                                        </div>
                                    </section><!-- End / widget-text__widget -->
                                    
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 ">
                            <div class="footer__item">
                                    
                                    <!-- widget-text__widget -->
                                    <section class="widget-text__widget widget">
                                        <div class="widget-text__content">
                                            <ul>
                                                <li><a href="#">How It Work </a></li>
                                                <li><a href="#">Carrier </a></li>
                                                <li><a href="#">Pricing </a></li>
                                                <li><a href="#">Support</a></li>
                                            </ul>
                                        </div>
                                    </section><!-- End / widget-text__widget -->
                                    
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-2 col-xl-2 ">
                            <div class="footer__item">
                                    
                                    <!-- form-sub -->
                                    <div class="form-sub">
                                        <h4 class="form-sub__title">Our Newsletter</h4>
                                        <form class="form-sub__form">
                                            <div class="form-item">
                                                <input class="form-control" type="email" placeholder="Enter Your Email Address..."/>
                                            </div>
                                            <div class="form-submit">
                                                <button class="form-button" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </div>
                                        </form>
                                    </div><!-- End / form-sub -->
                                    
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2  consult_backToTop">
                            <div class="footer__item"><a href="#" id="back-to-top"> <i class="fa fa-angle-up" aria-hidden="true"> </i><span>Back To Top</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="footer__copyright">2017 &copy; Copyright Awe7. All rights Reserved.</div>
            </footer><!-- End / footer -->
            
        </div>
        <!-- Vendors-->
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>