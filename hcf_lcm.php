<?php

//$numb1 = 111;
//$numb2 = 50;
 function check_primes($value)
    {
        if(($value < 0) || ($value == 1) || ($value == 2) || ($value == 3)){
            
            return false;
            
        }else{
        $half_value = $value/2;
        
        $count = 0;
        
        $p = 2;
        if($half_value == $p)
        {
            return false;
        }
        else{
             for($x=$p;$x<floor($half_value);$x++)
        {
            if($value%$x == 0)
            {
                $count++;
            }
            else{
                $count = $count;
            }
        }
        if($count>0)
        {
            return false;
            //echo$value." is not a prime number";
        }
        else{
            return true;
            //echo$value." is a prime number";
        }
        }
        
            
        }
        
   
    }
//check_primes($numb1);

    function get_highest_numb($fnumb,$snumb)
    {
    if($fnumb>$snumb)
    {
        return $fnumb;
    }
    else{
        return $snumb;
    }
    }
    
    function get_lowest_numb($val1,$val2)
    {
       if($val1<$val2)
    {
        return $val1;
    }
    else{
        return $val2;
    }  
    }
    
 
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
            
            return get_hcf($val1,$val2,$multiply);
            
           
           }

       //}
        
        
    }

    
    
    
    
    
    //echo(get_hcf(1731,53));
    
    
    function check_numbs($val1,$val2,$divisor)
    {
        if(($val1%$divisor == 0)&&($val2%$divisor == 0))
        {
            return $divisor;
        }
        else{
            return false;
        }
    }
    
    
     function get_divisor($val1,$val2)
    {
        $low_numb = get_lowest_numb($val1,$val2);
        $high_numb = get_highest_numb($val1,$val2); 
        
        $half_low = $low_numb/2;
        
        $half_high = $high_numb/2;
              
                
        for($x=2;$x<=floor($half_low);$x++)
        {
            if(($high_numb%$x == 0) && ($low_numb%$x == 0))
            {
                $divisor = $x;
                return $divisor;
                break;
            }
            
        }
       
    }
    
    
    
        function get_hcf($val1,$val2,$multiply)
    {
        $prime_checker1 = check_primes($val1);
        $prime_checker2 = check_primes($val2);
        
        $isPrime = false;
        
        if(($prime_checker1 == true) || ($prime_checker2 == true))
        {
         $isPrime = true;   
        }
        else{
            $isPrime = false;
        }
        
        if(($prime_checker1 != true) && ($prime_checker2 != true))
        {
         $isPrime = false; 
        }
        else{
            $isPrime = true;
        }
        
        if($isPrime == true)
        {
            $low_numb = get_lowest_numb($val1,$val2);
            $high_numb = get_highest_numb($val1,$val2);
            
            if(($low_numb*2) <= $high_numb)
            {
                 if(($val1%$low_numb == 0) && ($val2%$low_numb == 0))
            {
                $hcf = $low_numb*$multiply;
                return $hcf;
                
            }
             else{
                $hcf = 1*$multiply;
                return $hcf;
                
            }
            
                
            }
             elseif(($low_numb*2) < ($high_numb)){
                    if(($val1%$low_numb == 0) && ($val2%$low_numb == 0))
            {
                $hcf = $low_numb;
                return $hcf;
                
            }
            else{
                $hcf = 1*$multiply;
                return $hcf;
                
            }
                
            }
            if($low_numb == $high_numb)
            {
                $hcf = $low_numb*$multiply;
                return $hcf;
            }
              
        }    
        
        
       elseif($isPrime == false)
        {
           $divisor = get_divisor($val1,$val2);
           
        
           
           $hcf = continuos_division($val1,$val2,$divisor,$multiply);
           
          return $hcf;
           
           
            
        }
            
        
    }
    
    //$hcf = get_hcf($val1,$val2);
    
    function get_lcm($val1,$val2,$hcf)
    {
        $lcm = ($val1*$val2)/$hcf;
        return $lcm;
        
    }
    
   $numeric = get_hcf(20,40,1);
    echo($numeric);
?>