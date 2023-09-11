<?php include_once('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contactez-nous</title>
</head>
<body>
    <h1>Contactez nous</h1>
    <form action="traitement_contact.php" method="post">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>
        <p>Nous ne revendrons pas votre email.</p>
        <label for="message">Votre message :</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required>Exprimez vous</textarea><br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
<?php include_once('footer.php'); ?>
</html>