<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail de destination
    $destinataire = "exemple@gmail.com";

    // Sujet du message
    $sujet = "Nouveau formulaire de contact soumis";

    // Corps du message
    $corps_message = "email : $email\n";
    $corps_message .= "message :\n$message\n";

    // Envoi de l'e-mail
    mail($destinataire, $sujet, $corps_message);

    // Redirection vers une page de confirmation
    header("Location: confirmation.html");
} else {
    // Gérer le cas où la page n'est pas appelée en mode POST
    echo "Erreur : Quelque chose s'est mal passé, veuillez réessayer";
}
