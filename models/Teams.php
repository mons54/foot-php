<?php

namespace Models;

use Entities\Team as EntityTeam;

class Teams extends Model
{
  const REQUEST = '
    SELECT *,
    id_stadium AS idStadium,
    short_name AS shortName,
    fundation_date AS fundationDate
    FROM teams
  ';

  /**
   * @return array[EntityTeam]
   */
  public function getTeams(): array
  {
    $stmt = $this->db->prepare(self::REQUEST);
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_CLASS, 'Entities\Team');
  }

  /**
   * @param int $id
   * @return EntityTeam
   */
  public function getTeam(int $id):EntityTeam
  {
    $stmt = $this->db->prepare(self::REQUEST . 'WHERE id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchObject('Entities\Team');
  }
}
