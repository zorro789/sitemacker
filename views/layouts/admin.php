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
            <header class="header header__style-02" style="background-color: antiquewhite;">
                <div class="container">
                    <div class="header__logo"><a href="index.html"><img src="web/img/logo.png" alt=""/></a></div>
                    <div class="header__toogleGroup">
                        <div class="header__chooseLanguage">
                                        
                                        <!-- dropdown -->
                                       
                                        
                        </div>
                       
                    </div>
                    
                    <!-- consult-nav -->
                    <nav class="consult-nav">
                        
                        <!-- consult-menu -->
                        <ul class="consult-menu">
                            <li class="current-menu-item"><a href="http://five.plus/">Home</a>
                            </li>
                            <li><a href="/admin/texts/index">Texts</a>
                            </li>
                            <li><a href="/admin/requests/index">Requests</a>
                            </li>
                           
                        
                        <div class="navbar-toggle"><span></span><span></span><span></span></div>
                    </nav><!-- End / consult-nav -->
                    
                </div>
            </header><!-- End / header -->
            
            <!-- Content-->
            <div class="md-content" style="height: 900px; text-align: center; margin-left: 30px; margin-right: 60px;   margin-top: 140px;">
           
                <?= $content ?>
               
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