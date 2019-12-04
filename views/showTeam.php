<?php $extend = 'public/index.php'; ?>
<?php $title = $team->getName() . " - Fiche équipe"; ?>
<?php
  $description = $team->getName() .
  " est une équipe française fondé en " . $team->getFundationDate() .
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
              <td><?= $team->getFundationDate(); ?></td>
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
  <div class="jumbotron bg-dark mt-5">
    <nav>
      <div class="nav nav-tabs" id="tab" role="tablist">
        <a
          id="joueurs-tab"
          class="nav-item nav-link active"
          data-toggle="tab"
          href="#joueurs"
          role="tab"
          aria-controls="joueurs"
          aria-selected="true">
          Joueurs
        </a>
        <a
          id="matchs-tab"
          class="nav-item nav-link"
          data-toggle="tab"
          href="#matchs"
          role="tab"
          aria-controls="matchs"
          aria-selected="false">
          Matchs
        </a>
        <a
          id="administratif-tab"
          class="nav-item nav-link"
          data-toggle="tab"
          href="#administratif"
          role="tab"
          aria-controls="administratif"
          aria-selected="false">
          Administratif
        </a>
        <a
          id="administratif-tab"
          class="nav-item nav-link"
          data-toggle="tab"
          href="#administratif"
          role="tab"
          aria-controls="administratif"
          aria-selected="false">
          Stade
        </a>
      </div>
    </nav>
    <div class="tab-content" id="tab-content">
      <section
        id="joueurs"
        class="tab-pane fade show active"
        role="tabpanel"
        aria-labelledby="joueurs-tab">
        <table class="table table-dark">
          <thead>
            <tr style="border-top: 2px solid">
              <th scope="col">Numéro</th>
              <th scope="col">Nom</th>
              <th scope="col">Pays</th>
              <th scope="col">Né le</th>
              <th scope="col">Poste</th>
            </tr>
          </thead>
          <tbody>
            <?php $poste = null; ?>
            <?php foreach ($players as $player): ?>
              <tr style="<?= $poste !== $player->getPoste() ? 'border-top: 2px solid' : '' ?>">
                <th scope="row"><?= $player->getNumber() ?></th>
                <td><strong><?= $player->getName() ?></strong></td>
                <td><?= $player->getNationality() ?></td>
                <td><?= $player->getBirthdayDate() ?></td>
                <td><?= $player->getPoste() ?></td>
              </tr>
              <?php $poste = $player->getPoste(); ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </section>
      <section
        id="matchs"
        class="tab-pane fade show"
        role="tabpanel"
        aria-labelledby="matchs-tab">
        <?php if (!empty($matchsPlayed)): ?>
          <h3>Résultats</h3>
          <table class="table table-dark">
            <tbody>
              <?php foreach ($matchsPlayed as $match): ?>
                <tr>
                  <td class="text-right">
                    <a href="./teams/<?= $match->getIdTeamHome() ?>">
                      <?= $match->getNameTeamHome() ?>
                    </a>
                  </td>
                  <td class="text-center"><?= $match->getScoreHome() ?> - <?= $match->getScoreAway() ?></td>
                  <td class="text-left">
                    <a href="./teams/<?= $match->getIdTeamAway() ?>">
                      <?= $match->getNameTeamAway() ?>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php endif; ?>

        <?php if (!empty($matchsNotPlayed)): ?>
          <h3>Rencontres à venir</h3>
          <table class="table table-dark">
            <tbody>
              <?php foreach ($matchsNotPlayed as $match): ?>
                <tr>
                  <td class="text-right">
                    <a href="./teams/<?= $match->getIdTeamHome() ?>">
                      <?= $match->getNameTeamHome() ?>
                    </a>
                  </td>
                  <td class="text-center"><?= $match->getScoreHome() ?> - <?= $match->getScoreAway() ?></td>
                  <td class="text-left">
                    <a href="./teams/<?= $match->getIdTeamAway() ?>">
                      <?= $match->getNameTeamAway() ?>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php endif; ?>
      </section>
      <section
        id="administratif"
        class="tab-pane fade show"
        role="tabpanel"
        aria-labelledby="administratif-tab">
      </section>
      <section
        id="stade"
        class="tab-pane fade show"
        role="tabpanel"
        aria-labelledby="stade-tab">
      </section>
    </div>
  </div>
</div>
