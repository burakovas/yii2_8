<?php
/**
 * Created by PhpStorm.
 * User: burakovas
 * Date: 2019-01-27
 * Time: 19:54
 */

namespace app\assets;

use yii\web\AssetBundle;

class MyWidgetAsset extends AssetBundle
{
    public $sourcePath = '@app/widgets/views';
    public $css = [
        'style.css',
    ];
    public $js = [
    ];
}