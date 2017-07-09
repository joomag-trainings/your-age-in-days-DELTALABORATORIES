<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 7/9/2017
 * Time: 5:52 PM
 */
echo 'Days After Your Birthday'.'</br>';
$currentTime = time();
$birthDay = strtotime('2000-08-06');
$difference = $currentTime - $birthDay;
echo floor($difference / (60*60*24));
