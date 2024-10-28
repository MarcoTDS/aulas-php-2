<?php
    if(isset($_GET['numIn']) && isset($_GET['numFim'])){
        for($i=$_GET['numIn'];$i<=$_GET['numFim'];$i++){
            echo $i." ";
        }
    }
    elseif(isset($_GET['numIn'])){
        for($i=$_GET['numIn'];$i<=100;$i++){
            echo $i." ";
        }
    }
    elseif(isset($_GET['numFim'])){
        for($i=1;$i<=$_GET['numFim'];$i++){
            echo $i." ";
        }
    }
    else{
        for($i=1;$i<=100;$i++){
            echo $i." ";
        }
    }

?>