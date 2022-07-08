<?php
use yii\helpers\Url
?>
<h4><?=$menu?></h4>
<div class="list-group">
    <a href="<?=Url::to(['/product/detail', 'id' => 1, 'name'=>'link1'])?>" class="list-group-item">Menu 1</a>
    <a href="<?=Url::to(['/product/detail', 'id' => 2, 'name'=>'link2'])?>" class="list-group-item">Menu 2</a>
    <a href="<?=Url::to(['/product/detail', 'id' => 3, 'name'=>'link3'])?>" class="list-group-item">Menu 3</a>
</div>