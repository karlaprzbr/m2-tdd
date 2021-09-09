<?php

class Exercise
{
    public function isBalanced(string $string)
    {
        if( strstr($string, "(") || strstr($string, ")"))
        {
            $openCpt = substr_count($string, "("); 
            $closeCpt = substr_count($string, ")");
            if($openCpt == $closeCpt) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }
}