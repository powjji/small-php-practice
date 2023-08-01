<!-- You need to write a PHP program to calculate electricity bill using if-else conditions. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>calculate electricity bill</title>
</head>
<body>
<?php
    function calculate_bill($unit){
        $c1 = 3.5;
        $c2 = 4.0;
        $c3 = 5.20;
        $c4 = 6.50;
        if ($unit<=50){
            return (float)$unit * $c1;
        }
        elseif($unit<=100){
            return (float)$unit * $c2;
        }
        elseif($unit<=150){
            return (float)$unit * $c3;
        }
        elseif($unit>=250){
            return (float)$unit * $c4;
        }
        
    }
    if(isset($_REQUEST["submitbtn"])){
        $number = $_REQUEST["number"];
        if (!empty($number)){
            try{
                $number = (int)$number;
                $message = "Total amount of:$number - " .  calculate_bill((int)$_REQUEST["number"]) . "$";  
                
            }
            catch(Exception $e){
                $message = $e->getMessage();
            }
        }
        else{
            $message = "please fill up the entry!!";
            }
        }




?>
    <form action="" method="post">
        <label for="number">Calculate Electricity Bill</label>
        <br>
        <input type="text" placeholder="enter the number" id="number" name="number">
        <input type="submit" id="submitbtn" name="submitbtn">
        <br>
        <div>
            <?php
            if (isset($message)){
                echo  $message;
            }
            ?>
        </div>
    </form>
</body>
</html>