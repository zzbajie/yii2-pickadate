<?php

namespace zzbajie\pickadate\assets;

use yii\web\AssetBundle;

class PickadateAsset extends AssetBundle
{
    public $sourcePath = '@bower/pickadate/lib';

    /**
     * @var array
     */

    public function init()
    {
        $compressed = YII_DEBUG ? '' : 'compressed/';
        $this->css = [
            "{$compressed}themes/default.css",
            "{$compressed}themes/default.date.css",
            "{$compressed}themes/default.time.css",
        ];
        $this->js = [
            "{$compressed}picker.js",
            "{$compressed}legacy.js",
            "{$compressed}picker.date.js",
            "{$compressed}picker.time.js",
            "{$compressed}translations/zh_CN.js",
        ];
        parent::init();
    }

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
