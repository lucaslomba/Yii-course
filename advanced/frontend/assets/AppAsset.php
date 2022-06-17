<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendor/bootstrap/css/bootstrap.min.css',
        'vendor/font-awesome/css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic',
        'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
        'css/clean-blog.min.css',
    ];
    public $js = [
        'vendor/jquery/jquery.min.js',
        'vendor/popper/popper.min.js',
        'vendor/bootstrap/js/bootstrap.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
