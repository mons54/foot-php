<?php

namespace Models;

use Entities\Stadium as EntityStadium;

class Stadiums extends Model
{
  /**
   * @param int $idTeam
   * @return EntityStadium
   */
  public function getStadiumByTeam(int $idTeam):EntityStadium
  {
    $stmt = $this->db->prepare('SELECT s.*
      FROM stadiums AS s
      LEFT JOIN teams AS t
      ON t.id_stadium = s.id
      WHERE t.id = :id_team');
    $stmt->bindValue(':id_team', $idTeam);
    $stmt->execute();
    return $stmt->fetchObject('Entities\Stadium');
  }
}
