<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'css/stylin.css',
    ];
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js',
        'js/javascriptma.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
