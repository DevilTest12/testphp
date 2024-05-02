<?php
$email = $_POST['email'];
$password = $_POST['password'];

// Vérifier si les champs email et mot de passe ne sont pas vides
if (!empty($email) && !empty($password)) {
    // Stocker les informations dans un fichier texte
    $file = 'users.txt';
    $current = file_get_contents($file);
    $current .= "Email: " . $email . " Password: " . $password . "\n";
    file_put_contents($file, $current);

    echo "Informations stockées avec succès.";
} else {
    echo "Veuillez remplir tous les champs.";
}
?>
