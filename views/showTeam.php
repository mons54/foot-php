<?php $extend = 'public/index.php'; ?>
<?php $title = $team->getName() . " - Fiche équipe"; ?>
<?php
  $description = $team->getName() .
  " est une équipe française fondé en " . $team->getFundationDate() .
  ", sous la présidence de " . $team->getPresident() .
  ", l'entraineur actuel se nomme " . $coach->getName() .
  ".";
?>

<style>
.match-home,
.match-away {
  width: 50%;
}

.match-info {
  min-width: 80px;
}

@media (max-width: 767px) {
  .nav-tabs a {
    padding: .5rem .6rem;
  }

  .match-info {
    min-width: 52px;
  }
}
</style>

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
          href="#stade"
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
              <th class="d-none d-md-table-cell" scope="col">Pays</th>
              <th class="d-none d-md-table-cell" scope="col">Né le</th>
              <th scope="col">Poste</th>
            </tr>
          </thead>
          <tbody>
            <?php $poste = null; ?>
            <?php foreach ($players as $player): ?>
              <tr style="<?= $poste !== $player->getPoste() ? 'border-top: 2px solid' : '' ?>">
                <th scope="row"><?= $player->getNumber() ?></th>
                <td>
                  <a href="#" data-toggle="modal" data-target="#player<?= $player->getId() ?>">
                    <strong><?= $player->getName() ?></strong>
                  </a>
                  <div class="modal fade" id="player<?= $player->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content bg-dark">
                        <div class="modal-header">
                          <h5 class="modal-title" id="player<?= $player->getId() ?>Label">
                            <?= $player->getName() ?>
                          </h5>
                        </div>
                        <div class="modal-body">
                          <div class="d-flex mb-3">
                            <img style="max-height:140px; border-radius: 8px;" src="<?= $player->getPhoto(); ?>">
                            <img class="ml-auto" style="max-height:140px" src="<?= $team->getLogo(); ?>">
                          </div>
                          <table class="table table-bordered text-light">
                            <tbody>
                              <tr>
                                <td>Age</td>
                                <th>
                                  <?= $player->getAge() ? $player->getAge() . ' ans' : 'Inconnu'; ?>
                                </th>
                              </tr>
                              <tr>
                                <td>Né le</td>
                                <th>
                                  <?= $player->getBirthdayDate(); ?> à <?= $player->getBirthdayPlace(); ?>
                                </th>
                              </tr>
                              <?php if ($player->getSize()): ?>
                                <tr>
                                  <td>Taille</td>
                                  <th>
                                    <?= str_replace('.', 'm', (string) $player->getSize() / 100); ?>
                                  </th>
                                </tr>
                              <?php endif; ?>
                              <?php if ($player->getWeight()): ?>
                                <tr>
                                  <td>Poids</td>
                                  <th><?= $player->getWeight(); ?> kg</th>
                                </tr>
                              <?php endif; ?>
                              <tr>
                                <td>Numéro</td>
                                <th><?= $player->getNumber(); ?></th>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="d-none d-md-table-cell"><?= $player->getNationality() ?></td>
                <td class="d-none d-md-table-cell"><?= $player->getBirthdayDate() ?></td>
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
          <h4 class="mt-3">Résultats</h4>
          <table class="table table-dark matchs">
            <tbody>
              <?php foreach ($matchsPlayed as $match): ?>
                <tr>
                  <td class="text-right match-home">
                    <a
                      <?= $match->getIdTeamHome() === $team->getId() ? 'class="font-weight-bold"' : '' ?>
                      href="./teams/<?= $match->getIdTeamHome() ?>">
                      <?= $match->getTeamHome()->getShortName() ?>
                    </a>
                  </td>
                  <td class="text-center match-info
                    <?= $match->isWinner($team) ? 'text-success font-weight-bold' : '' ?>
                    <?= $match->isLoser($team) ? 'text-danger' : '' ?>
                  ">
                    <?= $match->getScoreHome() ?> - <?= $match->getScoreAway() ?>
                  </td>
                  <td class="text-left match-away">
                    <a
                      <?= $match->getIdTeamAway() === $team->getId() ? 'class="font-weight-bold"' : '' ?>
                      href="./teams/<?= $match->getIdTeamAway() ?>">
                      <?= $match->getTeamAway()->getShortName() ?>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php endif; ?>

        <?php if (!empty($matchsNotPlayed)): ?>
          <h4 class="mt-3">Rencontres à venir</h4>
          <table class="table table-dark">
            <tbody>
              <?php foreach ($matchsNotPlayed as $match): ?>
                <tr>
                  <td class="text-right match-home">
                    <a
                      <?= $match->getIdTeamHome() === $team->getId() ? 'class="font-weight-bold"' : '' ?>
                      href="./teams/<?= $match->getIdTeamHome() ?>">
                      <?= $match->getTeamHome()->getShortName() ?>
                    </a>
                  </td>
                  <td class="text-center match-info">
                    <span class="d-md-none">-</span>
                    <span class="d-none d-md-block"><?= $match->getDate() ?></span>
                  </td>
                  <td class="text-left match-away">
                    <a
                      <?= $match->getIdTeamAway() === $team->getId() ? 'class="font-weight-bold"' : '' ?>
                      href="./teams/<?= $match->getIdTeamAway() ?>">
                      <?= $match->getTeamAway()->getShortName() ?>
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
        <table class="table table-bordered text-light">
          <tbody>
            <tr>
              <td>Site</td>
              <th>
                <a href="//<?= $team->getWebsite(); ?>"><?= $team->getWebsite(); ?></a>
              </th>
            </tr>
            <tr>
              <td>Siège</td>
              <th>
                <a href="https://maps.google.com/?q=<?= $team->getAdress(); ?>">
                  <?= $team->getAdress(); ?>
                </a>
              </th>
            </tr>
            <tr>
              <td>Fiche</td>
              <th><a href="<?= $team->getLink(); ?>">Fiche l'équipe</a></th>
            </tr>
          </tbody>
        </table>
      </section>
      <section
        id="stade"
        class="tab-pane fade show"
        role="tabpanel"
        aria-labelledby="stade-tab">
        <table class="table table-bordered text-light">
          <tbody>
            <tr>
              <td>Stade</td>
              <th><?= $stadium->getName(); ?></th>
            </tr>
            <tr>
              <td>Capacité</td>
              <th><?= $stadium->getCapacity(); ?></th>
            </tr>
            <tr>
              <td>Adresse</td>
              <th>
                <a href="https://maps.google.com/?q=<?= $stadium->getAdress(); ?>">
                  <?= $stadium->getAdress(); ?>
                </a>
              </th>
            </tr>
            <tr>
              <td>Tél</td>
              <th>
                <a href="tel:<?= $stadium->getTel(); ?>"><?= $stadium->getTel(); ?></a>
              </th>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
  </div>
</div>
