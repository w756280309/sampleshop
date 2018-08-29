<?php
/**
 * Created by PhpStorm.
 * User: Angus
 * Date: 2018/8/29
 * Time: 10:58
 */
//compoer dumpautoload
function route_class(){
    return str_replace('.','-',Route::currentRouteName());
}