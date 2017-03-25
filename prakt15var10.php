<?php
$dies=$_POST['dies'];
    $dies=array();
    echo "$dies: ";
    for($i=1; $i<=6; $i++)
    {
        $dies[$i]=rand(1,6);
        echo $dies[$i];
    }
    ?>