<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "loyiha/img/apple-icon.png",
        "loyiha/img/favicon.png",
        "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700",
        "loyiha/css/nucleo-icons.css" ,
        "loyiha/css/nucleo-svg.css" ,
        "https://kit.fontawesome.com/42d5adcbca.js" ,
       "https://fonts.googleapis.com/icon?family=Material+Icons+Round",
       "loyiha/css/material-dashboard.css?v=3.0.0",
        'css/site.css',
    ];
    public $js = [
        "loyiha/js/core/popper.min.js",
"loyiha/js/core/bootstrap.min.js",
"loyiha/js/plugins/perfect-scrollbar.min.js",
"loyiha/js/plugins/smooth-scrollbar.min.js",
"loyiha/js/plugins/chartjs.min.js",
        "https://buttons.github.io/buttons.js",
"loyiha/js/material-dashboard.min.js?v=3.0.0",
        'js/main1.js',
        'js/main2.js'
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
