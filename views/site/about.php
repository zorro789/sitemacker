<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $text->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $aaa = 1;?>
<?php $this->beginBlock('block1');?>
<?= 'style="background-color: #1a1a23; color: wheat"'?>
    <?php $this->endBlock();?>

        <?php $this->beginBlock('block2');?>
<?= $aaa = 1; ?>
    <?php $this->endBlock();?>

<div id="trailer" class="is_overlay">
<video id="video" width="100%" height="auto" autoplay="autoplay" loop="loop" preload="auto">
<source src="../web/img/<?= $text->video?>"></source>
</video>
</div>

<div class="site-about" style="font-weight: 600;">
    <div class="title_about"><h1><?= Html::encode($this->title) ?></h1></div>

    <h3 style="font-weight: 600;">
<?= $text->preview?>    </h3>
    <?php for($i=1; $i<11; $i++) {?>
    <?php $a = 'content'.$i;?>
    <?php if ($text->$a):?>
    <br>
    <h4 style="text-indent: 2.5em; line-height: 1.5; font-weight: 600;">
    <?= $text->$a?>
    </h4>
    <?php endif?>
       <?php }?>
</div>
