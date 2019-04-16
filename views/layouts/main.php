<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
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
        <?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Url::to(['/web/favicon.ico'])]);?>

         
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
       
           
        
        <div class="page-wrap" <?php if(isset($this->blocks['block1'])): ?>
    <?= $this->blocks['block1']; ?>
    
    <?php endif;?>>
        
            <span style="display: none"> <?php if(isset($this->blocks['block1'])): ?>
    <?php $aaa = 1; ?>
    <?php else:?>
    <?php $aaa = 2; ?>        
    <?php endif;?>
            </span>
            <a name="kinds"></a>
            <!-- header -->
            <header class="header header__style-02">
                <div class="container">
                    <div class="header__logo"><a href="/"><img src="../web/img/logo.png" alt=""/></a></div>
                   
                    
                    <!-- consult-nav -->
                    <nav class="consult-nav">
                        
                        <!-- consult-menu -->
                        <ul class="consult-menu">
                          
                            <li class=" menu-item-has-children"><?= Html::a('Виды сайтов', ['/', '#'=>'kinds']);?><a class="bird fa-angle-down" onclick="openBird1()" style="border-bottom: 0; position: absolute; cursor: pointer; "></a>
                                <ul class="sub-menu">
                                    <li><?= Html::a('Сайт-визитка', ['site/about', 'id'=>1]);?>
                                    </li>
                                    <li><?= Html::a('Лендинг пейдж', ['site/about', 'id'=>2]);?>
                                    </li>
                                    <li><?= Html::a('Сайт-каталог', ['site/about', 'id'=>3]);?>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><?= Html::a('Цены и сроки', ['/', '#'=>'prices']);?><a class="bird fa-angle-down" onclick="openBird2()" style="position: absolute; "></a>
                                <ul class="sub-menu">
                                    <li onclick="openPrice1()"><?= Html::a('Сайт-визитка', ['/', '#'=>'prices']);?> /*, 'options'=> ['onclick'=>'openPrice1()']*/
                                    </li>
                                    <li onclick="openPrice1()"><?= Html::a('Лендинг пейдж', ['/', '#'=>'prices']);?>
                                    </li>
                                    <li onclick="openPrice2()"><?= Html::a('Сайт-каталог', ['/', '#'=>'prices']);?>
                                    </li>
                                </ul>
                            </li>
                            
                            <li><?= Html::a('Преимущества', ['/', '#'=>'advantages']);?>
                                
                            </li>
                            <li><?= Html::a('Этапы работ', ['/', '#'=>'stages']);?>
                                
                            </li>
                            </li>
                            <li><?= Html::a('Контакты', ['/', '#'=>'contacts']);?>
                            </li>
                            </ul><!-- consult-menu -->
                        
                        <div class="navbar-toggle" onclick="addOpen()"><span></span><span></span><span></span></div>
                    </nav><!-- End / consult-nav -->
                    
                </div>
            </header><!-- End / header -->
            
            <!-- Content-->
              <?= $content ?>
               
            <!-- End / Content-->
            
            <!-- footer -->
            <footer class="footer">
               
                <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 ">
                <div class="col-sm-6 col-md-6 col-lg-6 footer__copyright">2019 &copy; Copyright. Студия «5+». All rights Reserved.</div>
                 <div class="consult_backToTop">
                     <div class="col-sm-6 col-md-6 col-lg-6" style="padding-top: 15px;"><a href="#" id="back-to-top"> <i class="fa fa-angle-up" aria-hidden="true"> </i><span>Back To Top</span></a></div>
                        </div>
                        </div>
                </div>
                </div>
            </footer><!-- End / footer -->
            
        </div>
        <!-- Vendors-->
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

<script type="text/javascript" >
   function addOpen() {
  var element = document.getElementsByClassName("navbar-toggle");
  var element1 = document.getElementsByClassName("consult-menu");
  var element4 = document.getElementsByClassName("open");
  if (!element4[0]){
  element[0].classList.add("open");
  element1[0].classList.add("active");
  }
  else {
  element[0].classList.remove("open");
  element1[0].classList.remove("active");
  }
} 
 
    function openBird1() {
  var element2 = document.getElementsByClassName("sub-menu");
  if (element2[0].style.display === "block"){
  element2[0].style.display = "none";
  }
  else {
      element2[0].style.display = "block";
  }
} 
    function openBird2() {
  var element3 = document.getElementsByClassName("sub-menu");
        if (element3[1].style.display === "block"){
  element3[1].style.display = "none";
  }
  else {
      element3[1].style.display = "block";
  }
} 
   
   
    function isInViewport3(node) {
  var rect = node.getBoundingClientRect()
  return (
    (rect.height > 0) &&
    rect.bottom >= 0 &&
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) 
  )
}

var rrr = "<?php echo $aaa; ?>";
  
  var element6 = document.getElementsByClassName("header__style-02");
    if (rrr === "2"){
        $(window).scroll(function() {
   $('.slider__content').each(function open (index, element) {
    var visible3 = isInViewport3(this)
    
    if(!visible3) {
        element6[0].classList.add("shrink");
 }
 else {
      element6[0].classList.remove("shrink");
 }
   })
   })
  }
  else {
      element6[0].classList.add("shrink");
  }
   
    </script>