<?php
/**
 * Author: dungang
 * Date: 2017/4/9
 * Time: 14:53
 */

namespace dungang\stellar;


use yii\web\AssetBundle;

class StellarAsset extends AssetBundle
{
    public $sourcePath = '@bower/stellar';

    public $publishOptions = [
        'except'=>['/libs/','/src/','/test/'],
        'only'=>['*.js']
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        if (YII_DEBUG) {
            $this->js = ['jquery.stellar.js'];
        } else {
            $this->js = ['jquery.stellar.min.js'];
        }
    }
}