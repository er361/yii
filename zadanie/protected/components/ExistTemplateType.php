<?php

/**
 * Created by PhpStorm.
 * User: Erbol
 * Date: 20.12.2016
 * Time: 3:51
 */
class ExistTemplateType extends CValidator
{
    protected function validateAttribute($object,$attribute){
        //TODO: доделать валидатор
        $this->addError($object,$attribute,'нету такого типа шаблона просьба обратиться к администратору');
    }
}