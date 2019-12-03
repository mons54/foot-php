<?php

namespace Models;

use Entities\Team as EntityTeam;

class Teams extends Model
{
  /**
   * @return array[EntityTeam]
   */
  public function getTeams(): array
  {
    $stmt = $this->db->prepare('SELECT * FROM teams');
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_CLASS, 'Entities\Team');
  }

  /**
   * @param int $id
   * @return EntityTeam
   */
  public function getTeam(int $id):EntityTeam
  {
    $stmt = $this->db->prepare('SELECT * FROM teams WHERE id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchObject('Entities\Team');
  }
}
