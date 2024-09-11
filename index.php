<?php
    require 'partials/head.php';
    require 'data.php';
?>

<?php
var_dump($cars);
foreach ($cars as $valeur) {
    echo "<p>" . $valeur['name'] . "</p>";
}
?>

<?php
    foreach ($cars as $car) {
?>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="public/img/<?= $car['picture']?> "alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $car['name'] ?></h5>
            <p class="card-text"><?= $car['price']?></p>
            <a href="/car.php?id=<?= $car['id']?>" class="btn btn-primary">Voir plus</a>
        </div>
    </div>
<?php
}
?>

    <a class="btn btn-warning mt-5" href="formulaire.php">formulaire</a>

<?php
    require 'partials/footer.php';
?>