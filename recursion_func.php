<?php

//RECURSION EXAMPLE IN PHP

function continuos_division($val1,$val2,$divisor,$multiply)
    {
        
        $multiply =  $multiply;
           //$count = 1;     
       //while($divisor>1)
        //{
            
            if(($val1%$divisor ==0)&&($val2%$divisor ==0))
           {
           $temp1 = $val1/$divisor;
           $temp2 = $val2/$divisor;
           
           $multiply =  $multiply*$divisor;
           
           //$count += 1;
           
           //return $count;
           
           return continuos_division($temp1,$temp2,$divisor,$multiply);          
                      
           }
           else{
            return $multiply;
            
           
           }

       //}
        
        
    }



    $value = continuos_division(20,40,2,1);
    
    echo$value;
?>