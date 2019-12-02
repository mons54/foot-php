<?php
namespace Controllers;

use Models\Teams as ModelTeams;
use Models\Coachs as ModelCoachs;

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
    $this->render('views/showTeam.php', [
      'team' => $this->modelTeam->getTeam($id),
      'coach' => (new ModelCoachs)->getCoachByTeam($id)
    ]);
  }
}
