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
class LtAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
         'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js',
        
    ];
    public $jsOptions = [
       'condition' => 'lte IE9',
        'position' => \yii\web\View::POS_HEAD
    ];
}
