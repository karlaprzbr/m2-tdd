<?php

class Exercise
{
    public function isPrimeNumber(int $number)
    {
        for($i = 2; $i < $number; $i++) {
            if(($number%$i)==0) {
                return false;
            }
        }
        return true;
    }

    public function getPrimeFactors(int $number)
    {
        $primeFactors = [];
        for($i = 2; $i < $number; $i++) {
            if(($number%$i)==0) {
                if(Exercise::isPrimeNumber($i)) {
                    array_push($primeFactors, $i);
                }
            }
        }
        return $primeFactors;
    }

}