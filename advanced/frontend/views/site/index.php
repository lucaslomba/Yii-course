<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
      <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/home-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>My Yii Website</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <?php 
                    $body = 
                    Html::img(Url::to('@web/img/home-bg.jpg'), ['class'=>'img-responsive', 'style'=>'width:100%', 'alt'=>'Image']).
                    Html::tag('h2','Man must explore, and this is exploration at its greatest',['class'=>'post-title']).
                    Html::tag('h3','Problems look mighty small from 150 miles up',['class'=>'post-subtitle']).
                    Html::tag('div',Html::ul(['One', 'Two', 'Three', 'Four'], ['class'=>'list-group-item']),['class'=>'list-group'])
                ?>
                <?= Html::a($body,['/site/about'],[]) ?>
                <?=Html::tag('p','Posted by <a href="#">Start Bootstrap</a>on September 24, 2017',['class'=>'post-meta'])?>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                <h2 class="post-title">
                    I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                </h2>
                </a>
                <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                on September 18, 2017</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                <h2 class="post-title">
                    Science has not yet mastered prophecy
                </h2>
                <h3 class="post-subtitle">
                    We predict too much for the next year and yet far too little for the next ten.
                </h3>
                </a>
                <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                on August 24, 2017</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.html">
                <h2 class="post-title">
                    Failure is not an option
                </h2>
                <h3 class="post-subtitle">
                    Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                </h3>
                </a>
                <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                on July 8, 2017</p>
            </div>
            <hr>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
            </div>
            </div>
        </div>
    </div>