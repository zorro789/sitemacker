<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
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
                
               
                <!-- Section -->
                <section class="md-section" style="background-color:#f7f7f7;padding-top:0;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-lg-8 offset-0 offset-sm-0 offset-md-1 offset-lg-2 " style="width: 100%;">
                                
                                <!-- iconbox -->
                                <div class="iconbox">
                                    <div class="iconbox__icon"><i class="ti-timer"></i>/<i class="ti-money"></i></div>
                                    <div>
                                        <h2 class="iconbox__title"><a href="#">ЦЕНЫ И СРОКИ</a></h2>
                                        
                                        
                                        <div class="iconbox__description">До проектирования работ по созданию сайта определить стоимость и срок их выполнения представляется затруднительным. Ниже приведены ориентировочные цены и максимальные сроки создания Вашего сайта вебстудией «5+».</div>
                                    </div>
                                </div><!-- End / iconbox -->
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 ">
                                
                                <!-- iconbox -->
                                <div class="iconbox iconbox__style-02" id="Price1" style="border-radius: 20px 20px 0 0;">
                                    <div class="iconbox__icon"><i class="ti-desktop"></i></div>
                                    <div>
                                        <h2 class="iconbox__title" id="landingtitle" style="cursor: pointer; margin-bottom: 0px; padding-bottom: 30px;"><a onclick="openPrice1()">САЙТ-ВИЗИТКА/LANDING PAGE<br>цены/сроки</a></h2>
                                    </div>
                                </div><!-- End / iconbox -->
                                <div id="landingprice" class="tabs" style="background-color: #d3cece; display: none; padding-bottom: 40px">
                            <?php for($i=1; $i<21; $i++) {?>
    <?php $b = 'content'.$i;?>
    <?php if ($prices[0]->$b):?>
    <br>
    <h4 style="text-indent: 2.5em; line-height: 1.5; margin-left: 40px;  margin-right: 40px;">
    <?= $prices[0]->$b?>
    </h4>
    <?php endif?>
    <?php }?>
                        </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 ">
                                
                                <!-- iconbox -->
                                <div class="iconbox iconbox__style-02" id="Price2" style="border-radius: 20px 20px 0 0;">
                                    <div class="iconbox__icon"><i class="ti-shopping-cart"></i></div>
                                    <div>
                                        <h2 class="iconbox__title" id="catalogtitle" style="cursor: pointer; margin-bottom: 0px; padding-bottom: 30px;"><a onclick="openPrice2()">САЙТ-КАТАЛОГ<br>цены/сроки</a></h2>
                                    </div>
                                </div><!-- End / iconbox -->
                                <div id="catalogprice" class="tabs" style="background-color: #d3cece; display: none; float: right; padding-bottom: 40px">
                            <?php for($j=1; $j<21; $j++) {?>
    <?php $c = 'content'.$j;?>
    <?php if ($prices[1]->$c):?>
    <br>
    <h4 style="text-indent: 2.5em; line-height: 1.5; margin-left: 40px;  margin-right: 40px;">
    <?= $prices[1]->$c?>
    </h4>
    <?php endif?>
    <?php }?>
                        </div>
                            </div>
                           
                        </div>
                        
                        
                        
                    </div>
                </section>
                <script type="text/javascript">
       
   function openPrice1() {
       var element = document.getElementById("Price1");
   element.classList.add("priceclass");
           document.getElementById("landingprice").style.display = "inline-block";
           document.getElementById("catalogprice").style.display = "none";
           document.getElementById("landingtitle").style.color = "#f39c12";
           document.getElementById("catalogtitle").style.color = "#1f1c2f";
           var element1 = document.getElementById("Price2");
           element1.classList.remove("priceclass");
}
   
    function openPrice2() {
       var element1 = document.getElementById("Price2");
   element1.classList.add("priceclass");
           document.getElementById("catalogprice").style.display = "inline-block";
           document.getElementById("landingprice").style.display = "none";
           document.getElementById("catalogtitle").style.color = "#f39c12";
           document.getElementById("landingtitle").style.color = "#1f1c2f";
            var element = document.getElementById("Price1");
            element.classList.remove("priceclass");
}
       </script>
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
                                    <h2 class="title-01__title">Наши преимущества</h2>
                                </div><!-- End / title-01 -->
                                
                            </div>
                        </div>
                        <div class="consult-slide">
                            
                            <!-- carousel__element owl-carousel -->
                            <div class="carousel__element owl-carousel" data-options='{"loop":true,"dots":true,"nav":false,"margin":30,"responsive":{"0":{"items":1},"992":{"items":2}}}'>
                                
                                <!-- testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial__info"><a class="testimonial__avatar" href="#"><img src="web/img/avatars/avatar-01.jpg" alt=""/></a>
                                        <h3><?= $questions[0]->title?></h3><span class="testimonial__position">Support</span>
                                    </div>
                                    <div class="testimonial__content">
                                        <div class="testimonial__text">
                                                                <?php for($q=1; $q<11; $q++) {?>
    <?php $cq = 'content'.$q;?>
    <?php if ($questions[0]->$cq):?>
    <br>
    <h4 style="text-indent: 2.5em; line-height: 1.5; margin-left: 40px;  margin-right: 40px; text-align: justify;">
    <?= $questions[0]->$cq?>
    </h4>
    <?php endif?>
    <?php }?>    
                                        </div>
                                    </div>
                                </div><!-- End / testimonial -->
                                
                                
                                <!-- testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial__info"><a class="testimonial__avatar" href="#"><img src="web/img/avatars/avatar-02.jpg" alt=""/></a>
                                        <h3><?= $questions[1]->title?></h3><span class="testimonial__position">CEO &amp; Founder</span>
                                    </div>
                                    <div class="testimonial__content">
                                        <div class="testimonial__text">
                                         <?php for($w=1; $w<11; $w++) {?>
    <?php $cw = 'content'.$w;?>
    <?php if ($questions[1]->$cw):?>
    <br>
    <h4 style="text-indent: 2.5em; line-height: 1.5; margin-left: 40px;  margin-right: 40px; text-align: justify;">
    <?= $questions[1]->$cw?>
    </h4>
    <?php endif?>
    <?php }?>    </div>
                                    </div>
                                </div><!-- End / testimonial -->
                                
                                
                                <!-- testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial__info"><a class="testimonial__avatar" href="#"><img src="web/img/avatars/1.jpg" alt=""/></a>
                                        <h3><?= $questions[2]->title?></h3><span class="testimonial__position">Designer</span>
                                    </div>
                                    <div class="testimonial__content">
                                        <div class="testimonial__text"> <?php for($e=1; $e<11; $e++) {?>
    <?php $ce = 'content'.$e;?>
    <?php if ($questions[2]->$ce):?>
    <br>
    <h4 style="text-indent: 2.5em; line-height: 1.5; margin-left: 40px;  margin-right: 40px; text-align: justify;">
    <?= $questions[2]->$ce?>
    </h4>
    <?php endif?>
    <?php }?>   </div>
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