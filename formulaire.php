<?php
    require 'partials/head.php';
?>

<h1>Formulaire de contact</h1>
    <form action="formValide.php" method="POST">
        <label for="mail">
            Email
            <input type="email" name="mail">
        </label>
        <label for="name">
            Prénom
            <input type="text" name="name">
        </label>
        <label for="message">
            Message
            <input type="text" name="message">
        </label>
        <button type="submit" class="btn btn-primary"> Envoyer</button>
    </form>


<?php
    require 'partials/footer.php';
?>