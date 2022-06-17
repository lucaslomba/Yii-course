<?php 
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;
?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="<?=Url::to(['/site/index'])?>">Home</a>
            </li>
            <li class="nav-item">
                <a href="<?=Url::to(['/site/about'])?>">About</a>
            </li>
            <li class="nav-item">
                <a href="<?=Url::to(['/site/contact'])?>">Contact</a>
            </li>
            <li class="nav-item">
                <a href="<?=Url::to(['/product/index'])?>">Product</a>
            </li>
            <li class="nav-item">
                <a href="<?=Url::to(['/site/login'])?>">Login</a>
            </li>
            <li class="nav-item">
                <a href="<?=Url::to(['/site/signup'])?>">SignUp</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>