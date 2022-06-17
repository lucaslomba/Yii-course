<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>About</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>This is the About page. You may modify the following file to customize its content:</p>

        <code><?= __FILE__ ?></code>
    </div>
</div>
