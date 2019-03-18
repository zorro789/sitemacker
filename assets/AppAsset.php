<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/css/main.css',
       'web/fonts/fontawesome/font-awesome.min.css',
        'web/fonts/themify-icons/themify-icons.css',
        'web/vendors/bootstrap4/bootstrap-grid.min.css',
        'web/vendors/magnific-popup/magnific-popup.min.css',
        'web/vendors/owl.carousel/owl.carousel.css',
        'web/vendors/_jquery/jquery.min.css',
        'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i&amp;amp;subset=latin-ext',
        
        
         
    ];
    public $js = [
         'web/vendors/jquery/jquery.min.js',
        'web/vendors/imagesloaded/imagesloaded.pkgd.js',
        'web/vendors/isotope-layout/isotope.pkgd.js',
        'web/vendors/jquery.countdown/jquery.countdown.min.js',
        'web/vendors/jquery.countTo/jquery.countTo.min.js',
        'web/vendors/jquery.countUp/jquery.countup.min.js',
        'web/vendors/jquery.matchHeight/jquery.matchHeight.min.js',
        'web/vendors/jquery.mb.ytplayer/jquery.mb.YTPlayer.min.js',
        'web/vendors/magnific-popup/jquery.magnific-popup.min.js',
        'web/vendors/masonry-layout/masonry.pkgd.js',
        'web/vendors/owl.carousel/owl.carousel.js',
        'web/vendors/jquery.waypoints/jquery.waypoints.min.js',
        'web/vendors/menu/menu.min.js',
        'web/vendors/smoothscroll/SmoothScroll.min.js',
        'web/js/main.js',
    ];
    public $depends = [
       /* 'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',*/
    ];
}
