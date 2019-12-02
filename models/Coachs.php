<?php

namespace Models;

use Entities\Coach as EntityCoach;

class Coachs extends Model
{
  const REQUEST = '
    SELECT coachs.*,
    coachs.birthday_date AS birthdayDate,
    coachs.birthday_place AS birthdayPlace
    FROM coachs
  ';

  /**
   * @param int $idTeam
   * @return EntityCoach
   */
  public function getCoachByTeam(int $idTeam):EntityCoach
  {
    $stmt = $this->db->prepare(self::REQUEST . 'LEFT JOIN coachs_has_teams AS cht ON cht.id_coach = coachs.id WHERE cht.id_team = :id_team');
    $stmt->bindValue(':id_team', $idTeam);
    $stmt->execute();
    return $stmt->fetchObject('Entities\Coach');
  }
}
