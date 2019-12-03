<?php
namespace Controllers;

use Models\Teams as ModelTeams;
use Models\Coachs;
use Models\Players;

class Teams extends Controller
{
  private $modelTeam;

  public function __construct()
  {
    $this->modelTeam = new ModelTeams;
  }

  public function listTeams():void
  {
    $this->render('views/listTeams.php', [
      'teams' => $this->modelTeam->getTeams()
    ]);
  }

  public function showTeam(int $id):void
  {
    $players = (new Players)->getPlayersByTeam($id);
    usort($players, [$this, 'sortPlayer']);
    $this->render('views/showTeam.php', [
      'team' => $this->modelTeam->getTeam($id),
      'coach' => (new Coachs)->getCoachByTeam($id),
      'players' => $players,
    ]);
  }

  private function sortPlayer ($a, $b):?bool
  {
    $aPoste = $a->getPoste();
    $bPoste = $b->getPoste();
    $cNumber = $a->getNumber() > $b->getNumber();
    if ($bPoste === 'Gardien') {
      return $aPoste === 'Gardien' ? $cNumber : true;
    } else if ($aPoste !== 'Gardien') {
      if ($bPoste === 'Défenseur') {
        return $aPoste === 'Défenseur' ? $cNumber : true;
      } else if ($aPoste !== 'Défenseur') {
        if ($bPoste === 'Milieu') {
          return $aPoste === 'Milieu' ? $cNumber : true;
        } else if ($aPoste !== 'Milieu') {
          return $a->getNumber() > $b->getNumber();
        }
      }
    }
    return null;
  }
}
