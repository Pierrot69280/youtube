<div class="card">
    <div class="card-body">
        <h1 class="card-title"><?= $youtube->getName() ?></h1>
        <h4 class="card-subtitle mt-3"><?= $youtube->getDescription() ?></h4>
        <h5 class="card-subtitle mt-3"><?= $youtube->getFollower()?> Abonnés</h5>
        <a href="?type=youtube&action=index" class="btn btn-outline-secondary mt-3">Retour</a>
    </div>
</div>