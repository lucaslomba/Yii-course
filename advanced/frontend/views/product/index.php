<?php

?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('../img/home-bg.jpg')">
    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
            <h1>Product</h1>
        </div>
        </div>
    </div>
    </div>
</header>
<div class="container">
    <h1>Welcome to index</h1>
    <?=$this->render('menu', ['menu'=>$menu])?>
</div>