<?php

if (isset($_POST['booked']) == "") {
    $tabErreur = array();
    $room = $_POST['room'];
    $date = $_POST['date'];
    $start = $_POST['start'];
    $end = $_POST['end'];

    if ($room == "")
        array_push($tabErreur, "Veuillez choisir une salle");
    if ($date == "")
        array_push($tabErreur, "Veuillez choisir une date");
    if ($start == "")
        array_push($tabErreur, "Veuillez choisir une heure de début");
    if ($end == "")
        array_push($tabErreur, "Veuillez choisir une heure de fin");

    if (count($tabErreur) != 0) {
        $message = "<ul>";
        for ($i = 0; $i < count($tabErreur); $i++) {
            $message .= "<li>" . $tabErreur[$i] . "</li>";
        }
        $message .= "</ul>";
        echo($message);

        include("./include/formReservation.php");
}
    else{
        $db = connexion();
        $requete = "INSERT INTO t_reservations (reservation_id, reservation_nom, reservation_heureDebut, reservation_heureFin,
                            T_SALLES_salle_id)
                            VALUES (NULL, '$salle', '$start', '$end');";
        $resultatrequete = $db->query($requete);
        $nombreResultatRequete = $resultatrequete->rowCount();
        unset($db);
        if ($nombreResultatRequete == 1) {
            echo "<p>La salle est déjà réservé !</p>";
        } else {
            echo "<p>Votre réservation a bien été prise en compte.</p>";
        }
    }
    }




