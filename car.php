<?php
    require 'partials/head.php';
    require 'data.php';
    require 'function.php';
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $car = findCarById($cars, $id);

        if ($car !== null) {
            ?>
                <h1><?= $car['name'] ?></h1>
                <p>Prix : <?= $car['price'] ?>€</p>
                <img src="public/img/<?= $car['picture'] ?>" width="50%" alt="">
        <?php
        
        } else {
            echo "<p>Voiture non trouvée</p>";
        }

    } else {
        header('Location: /404.php');
        exit;
    }
?>




<?php
    require 'partials/footer.php';
?>