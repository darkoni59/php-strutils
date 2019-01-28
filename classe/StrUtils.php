<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:37
 */


class StrUtils
{
    private $str;
    public function __construct($str)
    {
        $this->str = $str;
    }
    public function bold()
    {
        return
            "<b>" . $this->str . "<b>";
    }
    public function italic()
    {
        return
            "<i>" . $this->str . "</i>";
    }
    public function underline()
    {
        return
            "<u>" . $this->str . "</u>";
    }
    public function capitalize()
    {
        return strtoupper($this->str);
    }
    public function uglify(){
        return
            "<i><u><b>" . $this->str . "</i></u></b>";
    }

    public function setStr($str)
    {
        $this->str = $str;
    }
    public function getStr()
    {
        return $this->str;
    }
}