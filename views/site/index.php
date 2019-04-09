<?php

/* @var $this yii\web\View */
use yii\helpers\Html;



$this->title = 'My Yii Application';
?>
            <div class="md-content">
                
                <!-- slider -->
                <div class="slider">
                    
                    <!-- carousel__element owl-carousel -->
                    <div class="carousel__element owl-carousel" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":0, "autoplay": true, "autoplayTimeout": 9000}'>
                        <div class="slider__item" style="background-image: url('web/img/site.png');">
                            <div class="md-tb">
                                <div class="md-tb__cell">
                                    <div class="slider__content">
                                        <div class="container">
                                            <h2><?= Html::a('Сайт-визитка за 150 рублей', ['site/about', 'id'=>1]);?></h2>
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
                                            <h2><?= Html::a('Лендинг пейдж (Landing Page) за 150 рублей', ['site/about', 'id'=>2]);?></h2>
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
                                            <h2><?= Html::a('Сайт-каталог за 300 рублей', ['site/about', 'id'=>3]);?></h2>
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
                                      <?php $image1 = '<img class="textbox__image" src="web/img/services/Visit.jpg" alt="сайт-визитка" />';?>
                                        <?= Html::a($image1, ['site/about', 'id'=>1]);?>
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><?= Html::a('Сайт-визитка', ['site/about', 'id'=>1]);?></h2>
                                            <div class="textbox__description">Сайт-визитка ­– интернет-ресурс, который позволяет представить в сети Интернет информацию о себе, своем бизнесе, месте и времени его работы.
Как правило, подобный сайт состоит из одной или нескольких страниц.</div>
                                        </div>
                                    </div><!-- End / textbox -->
                                    
                                </div>
                                <div class="col-md-4 col-lg-4 ">
                                    
                                    <!-- textbox -->
                                    <div class="textbox">
                                         <?php $image2 = '<img class="textbox__image" src="web/img/services/workplace1jpeg.jpg" alt="Landing Page" />';?>
                                        <?= Html::a($image2, ['site/about', 'id'=>2]);?>
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><?= Html::a('Лендинг пейдж', ['site/about', 'id'=>1]);?></h2>
                                            <div class="textbox__description">Landing Page (посадочная страница) – интернет-ресурс, который позволяет стимулировать посетителей к приобретению того или иного товара.
Как правило, подобный сайт состоит из одной страницы. </div>
                                        </div>
                                    </div><!-- End / textbox -->
                                    
                                </div>
                                <div class="col-md-4 col-lg-4 ">
                                    
                                    <!-- textbox -->
                                    <div class="textbox">
                                         <?php $image3 = '<img class="textbox__image" src="web/img/services/Catalog.jpg" alt="Catalog" />';?>
                                        <?= Html::a($image3, ['site/about', 'id'=>3]);?>
                                        
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><?= Html::a('Сайт-каталог', ['site/about', 'id'=>1]);?></h2>
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
                <a name="prices"></a>
                <section class="md-section" style="background-color:#f7f7f7;padding-top:0; padding-top: 80px;">
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
                                <div class="iconbox iconbox__style-02" id="Price1" style="border-radius: 20px 20px 0 0; cursor: pointer;" onclick="openPrice1()">
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
                                <div class="iconbox iconbox__style-02" id="Price2" style="border-radius: 20px 20px 0 0; cursor: pointer;" onclick="openPrice2()">
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
               
                <!-- End / Section -->
                
                <!-- What’s Client Say ?-->
                
                <!-- Section -->
                <a name="advantages"></a>
                <section class="md-section" style="padding-bottom:0;">
                    <div class="container">
                        <div class="row">
                                
                                <!-- title-01 -->
                                
                                <div class="title-01" style="margin-bottom:50px;">
                                    
                                    <h2 class="title-01__title">Наши преимущества</h2>
                                </div><!-- End / title-01 -->
                                
                        </div>
                        <div class="consult-slide">
                            
                            <!-- carousel__element owl-carousel -->
                            <div class="carousel__element owl-carousel" data-options='{"loop":true,"dots":true,"nav":false,"margin":30,"responsive":{"0":{"items":1},"992":{"items":2}}}'>
                                <!-- testimonial -->
                                <div class="testimonial">
                                    <div class="testimonial__info"><a class="testimonial__avatar" href="#"><img src="../../web/img/<?= $questions[0]->photo?>.jpg" alt=""/></a>
                                        <h3><?= $questions[0]->title?></h3><span class="testimonial__position"><?= $questions[0]->preview?></span>
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
                                    <div class="testimonial__info"><a class="testimonial__avatar" href="#"><img src="../../web/img/<?= $questions[1]->photo?>.jpg" alt=""/></a>
                                        <h3><?= $questions[1]->title?></h3><span class="testimonial__position"><?= $questions[1]->preview?></span>
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
                                    <div class="testimonial__info"><a class="testimonial__avatar" href="#"><img src="../../web/img/<?= $questions[2]->photo?>.jpg" alt=""/></a>
                                        <h3><?= $questions[2]->title?></h3><span class="testimonial__position"><?= $questions[2]->preview?></span>
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
                
                <section class="md-section parallax"  id="paral" style="
                         height: 900px;
                         background-image: url(../../web/img/backgrounds/4.jpg); 
                         background-repeat: no-repeat; 
                         background-size: initial;
                         background-attachment: fixed;
                         ">
                    <div class="container">
                        <div class="row">
                                
                                <!-- title-01 -->
                                <div class="title-01" >
                                    <h1 id="paral33" style="color: tomato; text-align: left;">Свяжитесь С Нами</h1>
                                    <h1 id="paral34" style="color: yellow; text-align: left;">по телефону</h1>
                                    <h1 id="paral35" style="color: greenyellow; text-align: left; font-size: 76px">+375-29-666-66-66</h1>
                                </div><!-- End / title-01 -->
                                
                            </div>
                            
                            
                        
                        
                     <div class="form-01 consult-form js-consult-form__content" id="paral36" style="position: inherit;
    top: 200px;
    z-index: 99;">
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
                        
                         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                <script type="text/javascript" >
                                
$("#paral33").click(function(){
     $("#paral").css("background-position", "50% 50%");
    document.getElementById("paral").classList.add("newclass");
    /*document.getElementById('paral33').style.display = "none"*/
     });
    
    function isInViewport(node) {
  var rect = node.getBoundingClientRect()
  return (
    (rect.height > 0 || rect.width > 0) &&
    rect.bottom >= 0 &&
    rect.right >= 0 &&
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.left <= (window.innerWidth || document.documentElement.clientWidth)
  )
}
    $(window).scroll(function() {
        var initX1 = $('#paral36').offset().left
  var scrolled = $(window).scrollTop()
  $('.parallax').each(function(index, element) {
    var initY = $(this).offset().top
    var initX = $(this).offset().left
    var height = $(this).height()
    var marg = $(this).width()
    var endY  = initY + $(this).height()

    // Check if the element is in the viewport.
    var visible = isInViewport(this)
    if(visible) {
      var diff = scrolled - initY
      var ratio = Math.round((diff / height) * 100)
       var pos = $( "#paral33" );
       var pos1 = $( "#paral34" );
       var pos2 = $( "#paral35" );
       var pos3 = $( "#paral36" );
      
      $(this).css('background-position','center ' + (-((ratio+300) * 20)) + 'px')
      if ((ratio < -18) && (ratio > -77)) {
      pos.offset({top:initY+(height/35)-(ratio*2), left:initX1-ratio*1.5})
      pos1.offset({top:initY+(height/15)-(ratio*4), left:initX1-ratio*2})
      pos2.offset({top:initY+(height/14)-(ratio*6), left:initX1-ratio*2.5})
      pos3.offset({top:initY+(height/14)-(ratio*10)})
  }
      if (ratio >= -18) {
      pos.offset({left:initX1})
      pos1.offset({left:initX1})
      pos2.offset({left:initX1})
  }
      document.getElementById("show").innerHTML = ratio;
      document.getElementById("show1").innerHTML = scrolled;
               }
  })
})

                                    </script>
                    </div>
                     <!-- form-01 -->
                        
                </section>
                           
                <!-- End / Section -->
                
                <!-- Latest Blogs -->
                
                <!-- Section -->
             
                <section class="md-section consult-background" style="z-index: 0;">
                    <a name="stages"></a>  
                    <div class="container" style="padding-top: 80px;">
                        <div class="row">
                                
                                <!-- title-01 -->
                                <div class="title-01">
                                    
                                     <h2 class="bar13" id="subar13">Этапы работ</h2>
                                </div><!-- End / title-01 -->
                                
                        </div>
                        
                        <!-- carousel__element owl-carousel -->
                        <div style="text-align: center; ">
                        <h3 class="bar14" id="subar14">1 ЭТАП</h3>
                        <div>
                            <h3 class="bar1" id="subar1"><?= $stages[0]->content?></h3>
                        </div>
                        <div>
                            <h3 class="bar2" id="subar2"><?= $stages[1]->content?></h3>
                        </div>
                        <div>
                            <h3 class="bar3" id="subar3"><?= $stages[2]->content?></h3>
                        </div>
                        <div>
                            <h3 class="bar4" id="subar4"><?= $stages[3]->content?></h3>
                        </div>
                       
                        <h3 class="bar15" id="subar15" style="margin-top: 60px;">2 ЭТАП</h3>
                        <div>
                            <h3 class="bar5" id="subar5"><?= $stages[4]->content?></h3>
                        </div>
                        <div>
                            <h3 class="bar6" id="subar6"><?= $stages[5]->content?></h3>
                        </div>
                        <div>
                            <h3 class="bar7" id="subar7"><?= $stages[6]->content?></h3>
                        </div>
                        <div>
                            <h3 class="bar8" id="subar8"><?= $stages[7]->content?></h3>
                        </div>
                       
                        <h3 class="bar16" id="subar16" style="margin-top: 60px;">3 ЭТАП</h3>
                        <div>
                            <h3 class="bar9" id="subar9"><?= $stages[8]->content?></h3>
                        </div>
                        <div>
                            <h3 class="bar10" id="subar10"><?= $stages[9]->content?></h3>
                        </div>
                        <div>
                            <h3 class="bar11" id="subar11"><?= $stages[10]->content?></h3>
                        </div>
                        <div>
                            <h3 class="bar12" id="subar12"><?= $stages[11]->content?></h3>
                        </div>
                        </div>
                        <!-- End / carousel__element owl-carousel -->
                        
                    </div>
                </section>
                
                <!-- End / Section -->
                
            </div>
<script type="text/javascript" >
    function my_sb1() {
    
    
    }
    
    function isInViewport1(node) {
  var rect = node.getBoundingClientRect()
  return (
    (rect.height > 0 || rect.width > 0) &&
    rect.bottom >= 0 &&
    rect.right >= 0 &&
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.left <= (window.innerWidth || document.documentElement.clientWidth)
  )
}

     $(window).scroll(function() {
  
   $('.consult-background').each(function open (index, element) {
    var visible1 = isInViewport1(this)
    if(visible1) {
     document.getElementById("subar13").classList.remove("bar13");
    document.getElementById("subar13").classList.add("changebar13");
    document.getElementById("subar1").classList.remove("bar1");
    document.getElementById("subar1").classList.add("changebar1");
    document.getElementById("subar2").classList.remove("bar2");
    document.getElementById("subar2").classList.add("changebar2");
    document.getElementById("subar3").classList.remove("bar3");
    document.getElementById("subar3").classList.add("changebar3");
    document.getElementById("subar4").classList.remove("bar4");
    document.getElementById("subar4").classList.add("changebar4");
    document.getElementById("subar5").classList.remove("bar5");
    document.getElementById("subar5").classList.add("changebar5");
    document.getElementById("subar6").classList.remove("bar6");
    document.getElementById("subar6").classList.add("changebar6");
    document.getElementById("subar7").classList.remove("bar7");
    document.getElementById("subar7").classList.add("changebar7");
    document.getElementById("subar8").classList.remove("bar8");
    document.getElementById("subar8").classList.add("changebar8");
    document.getElementById("subar9").classList.remove("bar9");
    document.getElementById("subar9").classList.add("changebar9");
    document.getElementById("subar10").classList.remove("bar10");
    document.getElementById("subar10").classList.add("changebar10");
    document.getElementById("subar11").classList.remove("bar11");
    document.getElementById("subar11").classList.add("changebar11");
    document.getElementById("subar12").classList.remove("bar12");
    document.getElementById("subar12").classList.add("changebar12");
    document.getElementById("subar14").classList.remove("bar14");
    document.getElementById("subar14").classList.add("changebar14");
    document.getElementById("subar15").classList.remove("bar15");
    document.getElementById("subar15").classList.add("changebar15");
    document.getElementById("subar16").classList.remove("bar16");
    document.getElementById("subar16").classList.add("changebar16");
   }
   
        else {
     document.getElementById("subar13").classList.remove("changebar13");
    document.getElementById("subar13").classList.add("bar13");
    document.getElementById("subar1").classList.remove("changebar1");
    document.getElementById("subar1").classList.add("bar1");
    document.getElementById("subar2").classList.remove("changebar2");
    document.getElementById("subar2").classList.add("bar2");
    document.getElementById("subar3").classList.remove("changebar3");
    document.getElementById("subar3").classList.add("bar3");
    document.getElementById("subar4").classList.remove("changebar4");
    document.getElementById("subar4").classList.add("bar4");
    document.getElementById("subar5").classList.remove("changebar5");
    document.getElementById("subar5").classList.add("bar5");
    document.getElementById("subar6").classList.remove("changebar6");
    document.getElementById("subar6").classList.add("bar6");
    document.getElementById("subar7").classList.remove("changebar7");
    document.getElementById("subar7").classList.add("bar7");
    document.getElementById("subar8").classList.remove("changebar8");
    document.getElementById("subar8").classList.add("bar8");
    document.getElementById("subar9").classList.remove("changebar9");
    document.getElementById("subar9").classList.add("bar9");
    document.getElementById("subar10").classList.remove("changebar10");
    document.getElementById("subar10").classList.add("bar10");
    document.getElementById("subar11").classList.remove("changebar11");
    document.getElementById("subar11").classList.add("bar11");
    document.getElementById("subar12").classList.remove("changebar12");
    document.getElementById("subar12").classList.add("bar12");
    document.getElementById("subar14").classList.remove("changebar14");
    document.getElementById("subar14").classList.add("bar14");
    document.getElementById("subar15").classList.remove("changebar15");
    document.getElementById("subar15").classList.add("bar15");
    document.getElementById("subar16").classList.remove("changebar16");
    document.getElementById("subar16").classList.add("bar16");
   }
   })
})
    </script>