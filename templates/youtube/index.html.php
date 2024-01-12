<h1>Voici les Youtubeurs :</h1>

<hr>

<?php foreach ($youtubes as $youtube): ?>
    <div class="card mt-5">
        <div class="card-body">
            <h1 class="card-title"><?= $youtube->getName() ?></h1>
            <h4 class="card-subtitle mt-3"><?= $youtube->getDescription() ?></h4>
            <h5 class="card-subtitle mt-3"><?= $youtube->getFollower()?> Abonnés</h5>
            <a href="?type=youtube&action=show&id=<?= $youtube->getId() ?>" class="btn btn-success mt-3">Voir</a>
            <a href="?type=youtube&action=delete&id=<?= $youtube->getId() ?>" class="btn btn-danger mt-3">Supprimer</a>
        </div>
    </div>


<?php endforeach; ?>