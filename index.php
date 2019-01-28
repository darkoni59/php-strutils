<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:37
 */
require "classe/StrUtils.php";


$str = new StrUtils("forever alone");

echo $str->bold();

echo"<hr>";

echo $str->italic();

echo"<hr>";

echo $str->underline();

echo"<hr>";

echo $str->capitalize();

echo"<hr>";

echo $str->uglify();
