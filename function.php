<?php
    function add($x, $y){
        return $x + $y;
    }

    echo add(4,5);
    function hello($x){
        $user= $x;
        if($user === "Asaal"){
            echo "hello " . $user;
        }else{
            echo "bye " .$user;
        }
    }

    hello("saud");
    echo "<br>";
    hello ("Asaal");
?>