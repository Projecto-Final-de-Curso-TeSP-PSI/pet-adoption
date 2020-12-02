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
        'css/site.css',
        'css/bootstrap.min.css',
        'css/LineIcons.css',
        'css/viewer.min.css',
        'css/icofont.min.css',
        'css/calendar.css',
        'css/styles.css',
        'css/responsive.scss',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/feather.min.js',
        'js/viewer.min.js',
        'js/custom.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];

}
