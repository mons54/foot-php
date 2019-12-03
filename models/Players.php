<?php

namespace Models;

use Entities\Player as EntityPlayer;

class Players extends Model
{
  /**
   * @param int $idTeam
   * @return array[EntityPlayer]
   */
  public function getPlayersByTeam(int $idTeam): array
  {
    $stmt = $this->db->prepare('SELECT p.*, pht.number
      FROM players AS p
      LEFT JOIN players_has_teams AS pht ON pht.id_player = p.id
      WHERE pht.id_team = :id_team
      AND pht.number != 0
      ORDER BY pht.number
    ');
    $stmt->bindValue(':id_team', $idTeam);
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_CLASS, 'Entities\Player');
  }
}
