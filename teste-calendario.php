<?php
    function calendario()
{   
    $dia = 1;
    $semana = array();
    while ($dia <= 31){
        array_push($semana, $dia);
        if (count(semana) == 7){
            linha($semana);
            $semana = array();
        }
        $dia++;
    }
}
?>
