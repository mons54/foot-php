<?php $extend = 'public/index.php'; ?>
<?php $title = $team->getName() . " - Fiche équipe"; ?>
<?php
  $description = $team->getName() .
  " est une équipe française fondé en " . $team->getFundationDate()->format('Y') .
  ", sous la présidence de " . $team->getPresident() .
  ", l'entraineur actuel se nomme " . $coach->getName() .
  ".";
?>

<div class="container">
  <div class="jumbotron bg-dark mt-5">
    <div class="row">
      <div class="col-md-3 d-flex align-items-center">
        <div class="text-center">
          <h1><?= $team->getShortName(); ?></h1>
          <img src="<?= $team->getLogo(); ?>" alt="Logo de l'équipe <?= $team->getName(); ?>">
        </div>
      </div>
      <div class="col-md-9 d-flex align-items-center mt-3">
        <table class="table table-bordered text-light">
          <tbody>
            <tr>
              <th scope="name">Nom</th>
              <td><?= $team->getName(); ?></td>
            </tr>
            <tr>
              <th scope="row">Fondé en</th>
              <td><?= $team->getFundationDate()->format('Y'); ?></td>
            </tr>
            <tr>
              <th scope="row">Président</th>
              <td><?= $team->getPresident(); ?></td>
            </tr>
            <tr>
              <th scope="row">Entraineur</th>
              <td><?= $coach->getName(); ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
