<?php
/**
 * Created by PhpStorm.
 * User: burakovas
 * Date: 2019-01-12
 * Time: 08:43
 */

namespace app\actions;


use yii\base\Action;

class HelloAction extends Action
{
    public function run()
    {
        echo "Hello World";
    }
}