<?php

namespace KinwingWidgets\colorpicker\assets;

use yii\web\AssetBundle;

class ColorPickerAsset extends AssetBundle
{
    public $js = [
        'js/colorpicker.js',
    ];
    public $css = [
        'css/colorpicker.css',
        'css/custom-colorpicker.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    /**
     * 初始化：sourcePath赋值
     * @see \yii\web\AssetBundle::init()
     */
    public function init()
    {
        $this->sourcePath = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor';
    }

}
