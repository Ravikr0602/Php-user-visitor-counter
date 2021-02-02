<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Counter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!----- this below code the user visitor update and insert ------> 

<?php

// step 1: connect to the database 

require 'connection.php';

// step 2: user visit the website database update user visiting

$visitor_update = "UPDATE `user_visitor` SET `total_visitor` = total_visitor+1 ";
$res = mysqli_query($conn,$visitor_update);

// step 3: display all visitor 

$visitor = "SELECT `total_visitor` FROM `user_visitor` ";
$total_visitor = mysqli_query($conn,$visitor);
$arr[0] = mysqli_fetch_array($total_visitor);

// step 4: count the visitor times by using array

$counter = $arr[0] ['total_visitor'];

// step 5: count the length of visitor digit

$count = strlen($counter);

?>

<!---------------------------------------------------------------------------------------------------------
below the visitor html container 
---------------------------------------------------------------------------------------------------------->

<div class="visitor">
    
    <h1>User Visitor Counter</h1>
   <?php
   for($i=0; $i<$count; $i++) 
   {
    ?>

    <ul id= "visitor_count">

        <li><?php echo $counter[$i]  ?> </li>
        
    <?php
    }
    ?>
    </ul>
</div>

</body>
</html>