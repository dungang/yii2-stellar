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

    public $js = [
        'jquery.stellar.min.js',
    ];

    public $publishOptions = [
        'only'=>[
            'jquery.stellar.min.js',
        ]
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}