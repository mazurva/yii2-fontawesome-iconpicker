<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 26.09.17
 * Time: 12:55
 */

namespace mazurva\widgets\iconpicker;

use yii\web\AssetBundle;

class IconPickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/farbelous/fontawesome-iconpicker/dist';

    public $css = [
        'css/fontawesome-iconpicker.min.css',
    ];
    public $js = [
        'js/fontawesome-iconpicker.min.js'
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}