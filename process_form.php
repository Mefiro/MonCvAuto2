<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $objet = htmlspecialchars(trim($_POST['objet']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Ton adresse e-mail où le message sera envoyé
    $to = "moncvauto@gmail.com";

    // Sujet de l'email
    $subject = "Message de contact de $nom $prenom";

    // Contenu de l'email
    $body = "Nom: $nom\n";
    $body .= "Prénom: $prenom\n";
    $body .= "Email: $email\n";
    $body .= "Objet: $objet\n";
    $body .= "Message:\n$message";

    // Entêtes de l'e-mail
    $headers = "From: $email";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur est survenue. Veuillez réessayer.";
    }
}
?>
