<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 26.09.17
 * Time: 12:55
 */

namespace mazurva\widgets\iconpicker\assets;

use yii\web\AssetBundle;

class IconPickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/itsjavi/fontawesome-iconpicker/dist';

    public $css = [
        'css/fontawesome-iconpicker.min.css',
    ];
    public $js = [
        'http://code.jquery.com/jquery-migrate-3.0.0.js',
        'js/fontawesome-iconpicker.min.js'
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}