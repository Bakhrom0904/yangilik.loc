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
        "/sandbox/css/plugins.css",
        "/sandbox/css/style.css",
       "/sandbox/css/fonts/dm.css",
        'css/site.css',
        "/sandbox/img/favicon.png",
    "/sandbox/css/plugins.css",
    "/sandbox/css/style.css",
    ];
    public $js = [
        "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js",
   "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js",
    "/sandbox/js/plugins.js",
    "/sandbox/js/theme.js",
      "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js",
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js",
"/sandbox/js/plugins.js",
"/sandbox/js/theme.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
