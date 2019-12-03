<?php

namespace Models;

use Entities\Coach as EntityCoach;

class Coachs extends Model
{
  /**
   * @param int $idTeam
   * @return EntityCoach
   */
  public function getCoachByTeam(int $idTeam):EntityCoach
  {
    $stmt = $this->db->prepare('SELECT c.* FROM coachs AS c LEFT JOIN coachs_has_teams AS cht ON cht.id_coach = c.id WHERE cht.id_team = :id_team');
    $stmt->bindValue(':id_team', $idTeam);
    $stmt->execute();
    return $stmt->fetchObject('Entities\Coach');
  }
}
