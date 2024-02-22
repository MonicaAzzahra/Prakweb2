<?php

$animals =["kucing","ayam", "banteng","ikan"];
echo 'ini hewan dengan index 1 :'.$animals[1];
echo "<br>";
echo 'ini hewan dengan index 3 :'.$animals[3];
echo '<br>';

foreach ($animals as $animal){
    echo'<li>'. $animal.'</li>';
}


?>