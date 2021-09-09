<?php

class Exercise
{
    public function isBalanced(string $string)
    {
        if( strstr($string, "(") || strstr($string, ")"))
        {
            $tab = str_split($string);
            $openCpt = 0;
            for($i=0;$i<strlen($tab);$i++) {
                if($tab[$i]=="(") {
                    $openCpt++;
                }
                if($tab[$i]==")") {
                    $openCpt--;
                }
            }
            if($openCpt == 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }
}