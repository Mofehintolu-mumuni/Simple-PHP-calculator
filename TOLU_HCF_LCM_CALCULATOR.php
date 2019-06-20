<?php
require_once("new_hcf_lcm.php");

?>

<html>
<head>
<title>
TOLU HCF AND LCM CALCULATOR
</title>
</head>
<body>
<h3 style="text-align: center;">This HCF AND LCM CALCULATOR was developed by Mofehintolu O. Mumuni</h3>
<br />
<form action="" method="POST" style="text-align: center;">

<h3>Enter First value</h3>
<br />
<input type="number" name="val1"/>

<br />
<h3>Enter Second value</h3>
<br />
<input type="number" name="val2"/>
<br />
<br />
<input type="submit" name="get_solution" value="Get Results"/>
<br />

</form>
<p style="color: blue; text-align: center;">
<?php
    if(isset($_POST['get_solution']))
    {
        if(isset($_POST['val1']) && isset($_POST['val2']))
        {
            
    $num1 = $_POST['val1'];
   $num2 = $_POST['val2'];
 
    if((empty($num1)) || (empty($num2)))
    {
       echo"Enter two values";
       return; 
    }
   
   if((is_int($num1) === TRUE) && (is_int($num2) === TRUE))
    {
       echo"Enter two Integers";
       return; 
    }
 
   
    $my_cal = new TOLU_HCF_LCM_CALCULATOR();

    $my_cal->get_hcf_and_lcm($num1,$num2);
    
        }
        else{
            echo"Enter two values";
        }
        
    }

?>
</p>

</body>
</html>