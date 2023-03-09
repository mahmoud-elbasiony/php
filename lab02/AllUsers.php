<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="padding:30px;">
<?php 
        $users=convert_file_to_array();
        foreach($users as $user){
            // var_dump($user);
            $values=explode(" , ",$user);
            // var_dump($values);
            echo "<p>**************************</p>";
            // foreach($user as $value){
                ?>
                <p><strong>visit Date: </strong><?php echo $values[0]?></p> 
                <p><strong>Ip Address: </strong><?php echo $values[1]?></p>
                <p><strong>Name: </strong><?php echo $values[2]?></p>  
                <p><strong>Email: </strong><?php echo $values[3]?></p>
                <?php
            // }
        }
    ?>
    
</body>
</html>