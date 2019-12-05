<?php

namespace Models;

use Entities\Match as EntityMatch;
use Entities\Team;

class Matchs extends Model
{
  CONST REQ_TEAM = 'SELECT m.*,
    th.short_name AS th_short_name,
    ta.short_name AS ta_short_name
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
    return $this->setTeam($stmt->fetchAll(\PDO::FETCH_CLASS, 'Entities\Match'));
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
    return $this->setTeam($stmt->fetchAll(\PDO::FETCH_CLASS, 'Entities\Match'));
  }

  /**
   * @param array $matchs
   * @return array
   */
  protected function setTeam(array $matchs):array
  {
    foreach ($matchs as &$match) {
      $teamHome = new Team;
      $teamHome->setShortName($match->th_short_name);
      unset($match->th_short_name);
      $match->setTeamHome($teamHome);

      $teamAway = new Team;
      $teamAway->setShortName($match->ta_short_name);
      unset($match->ta_short_name);
      $match->setTeamAway($teamAway);
    }

    return $matchs;
  }
}
