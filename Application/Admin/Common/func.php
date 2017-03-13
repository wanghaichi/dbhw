<?php
    /**
     * Created by PhpStorm.
     * User: dell
     * Date: 2016/5/20
     * Time: 18:32
     */

function baseNullTest($var){
    if($var != null)
        return $var;
    return "";
}