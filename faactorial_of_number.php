<?php

    function calculate_factorial($number)
    {
        if($number<=2)
        {
           return $number; 
        }
        else{
            return($number*(calculate_factorial($number-1)));
        }
        
    }
    
    echo(calculate_factorial(4));

?>