<?php
/**
 * Created by PhpStorm.
 * User: burakovas
 * Date: 2018-12-25
 * Time: 08:33
 */
namespace app\validators;
use yii\validators\Validator;

class MyValidator extends Validator
{
    public function validateAttributes($model, $attributes = null)
    {
        parent::validateAttributes($model, $attributes); // TODO: Change the autogenerated stub
    }

}