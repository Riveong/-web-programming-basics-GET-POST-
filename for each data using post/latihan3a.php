
    <?php

$hobi= $_POST["hobi"];
$r = 0;
echo "<ol>";
    foreach($hobi as $i){
        echo "<li>";
        echo $hobi[$r]; 
        $r = $r + 1;
        echo "</li>";
        }

        echo "<a href ='./latihan3.php'> Kembali </a>";
    
                ?>
