<?php $extend = 'public/index.php'; ?>
<?php $title = "Liste des équipe"; ?>
<?php $description = "Retrouvez la liste des 20 équipes de Ligue 1."; ?>

<style>
.teams a {
  display: block;
  padding: 12px;
}
</style>

<div class="container mt-4">
  <div class="row teams">
    <?php foreach ($teams as $team) { ?>
      <div class="col-md-3 col-6 mb-4">
        <a href="./teams/<?= $team->getId(); ?>">
          <img src="<?= $team->getLogo(); ?>"
               class="card-img-top"
               alt="Logo de l'équipe <?= $team->getName(); ?>"
               data-toggle="tooltip"
               title="<?= $team->getName(); ?>">
        </a>
      </div>
    <?php } ?>
  </div>
</div>
