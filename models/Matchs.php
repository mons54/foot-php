<?php

namespace Models;

use Entities\Match as EntityMatch;

class Matchs extends Model
{
  CONST REQ_TEAM = 'SELECT m.*,
    th.name AS name_team_home,
    ta.name AS name_team_away
    FROM matchs AS m
    LEFT JOIN teams AS th ON th.id = m.id_team_home
    LEFT JOIN teams AS ta ON ta.id = m.id_team_away
    WHERE (th.id = :id_team OR ta.id = :id_team)';

  /**
   * @param int $idTeam
   * @return array[EntityMatch]
   */
  public function getMatchsPlayedByTeam(int $idTeam): array
  {
    $stmt = $this->db->prepare(self::REQ_TEAM . 'AND m.score_home IS NOT NULL');
    $stmt->bindValue(':id_team', $idTeam);
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_CLASS, 'Entities\Match');
  }

  /**
   * @param int $idTeam
   * @return array[EntityMatch]
   */
  public function getMatchsNotPlayedByTeam(int $idTeam): array
  {
    $stmt = $this->db->prepare(self::REQ_TEAM . 'AND m.score_home IS NULL');
    $stmt->bindValue(':id_team', $idTeam);
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_CLASS, 'Entities\Match');
  }
}
