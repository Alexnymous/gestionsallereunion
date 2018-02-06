<?php


    $joursem = array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');
        echo"<tr align='center'><td width='400'></td>";
    $annee=date('Y');
    $jour=date('d');
    $mois = date('n');

    $numSemaine = date('W',mktime(0,0,0));


    echo "Planning de la semaine : $numSemaine";


    $premierJanvier = mktime(1,0,0,1,1,$annee);
    $jourPremierJanvier = date('w',$premierJanvier);


    $timestamp1 = $premierJanvier+$numSemaine*7*24*3660;
    $jour = date('w',$timestamp1);

    for ($i=0;$i<=6;$i++) {
    $timestamp = $timestamp1+($i-$jour)*24*3600;
    $jour1 = date('w',$timestamp);
    echo " <td colspan='2'>".$joursem[$jour1];
    echo date('d/m/y',$timestamp);
    "</td>";


    }
    echo" </tr> "; //changement de ligne


?>
