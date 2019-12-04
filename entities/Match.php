<?php

namespace Entities;

class Match extends Entity
{
  /**
   * @var int
   */
  protected $id;

  /**
   * @var int
   */
  protected $id_season;

  /**
   * @var int
   */
  protected $id_team_home;

  /**
   * @var int
   */
  protected $id_team_away;

  /**
   * @var int
   */
  protected $name_team_home;

  /**
   * @var int
   */
  protected $name_team_away;

  /**
   * @var int|null
   */
  protected $score_home;

  /**
   * @var int|null
   */
  protected $score_away;

  /**
   * @var int
   */
  protected $day;

  /**
   * @var string
   */
  protected $date;

  /**
   * Get the value of Id
   *
   * @return int
   */
  public function getId():int
  {
    return $this->id;
  }

  /**
   * Set the value of Id
   *
   * @param int $id
   *
   * @return self
   */
  public function setId(int $id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of Id Season
   *
   * @return int
   */
  public function getIdSeason():int
  {
    return $this->id_season;
  }

  /**
   * Set the value of Id Season
   *
   * @param int $id_season
   *
   * @return self
   */
  public function setIdSeason(int $id_season)
  {
    $this->id_season = $id_season;

    return $this;
  }

  /**
   * Get the value of Id Team Home
   *
   * @return int
   */
  public function getIdTeamHome():int
  {
    return $this->id_team_home;
  }

  /**
   * Set the value of Id Team Home
   *
   * @param int $id_team_home
   *
   * @return self
   */
  public function setIdTeamHome(int $id_team_home)
  {
    $this->id_team_home = $id_team_home;

    return $this;
  }

  /**
   * Get the value of Id Team Away
   *
   * @return int
   */
  public function getIdTeamAway():int
  {
    return $this->id_team_away;
  }

  /**
   * Set the value of Id Team Away
   *
   * @param int $id_team_away
   *
   * @return self
   */
  public function setIdTeamAway(int $id_team_away)
  {
    $this->id_team_away = $id_team_away;

    return $this;
  }

  /**
   * Get the value of Score Home
   *
   * @return int|null
   */
  public function getScoreHome():?int
  {
    return $this->score_home;
  }

  /**
   * Set the value of Score Home
   *
   * @param int|null $score_home
   *
   * @return self
   */
  public function setScoreHome(?int $score_home)
  {
    $this->score_home = $score_home;

    return $this;
  }

  /**
   * Get the value of Score Away
   *
   * @return int|null
   */
  public function getScoreAway():?int
  {
    return $this->score_away;
  }

  /**
   * Set the value of Score Away
   *
   * @param int|null $score_away
   *
   * @return self
   */
  public function setScoreAway(?int $score_away)
  {
    $this->score_away = $score_away;

    return $this;
  }

  /**
   * Get the value of Day
   *
   * @return int
   */
  public function getDay():int
  {
    return $this->day;
  }

  /**
   * Set the value of Day
   *
   * @param int $day
   *
   * @return self
   */
  public function setDay(int $day)
  {
    $this->day = $day;

    return $this;
  }

  /**
   * Get the value of Date
   *
   * @return string
   */
  public function getDate():string
  {
    return $this->date;
  }

  /**
   * Set the value of Date
   *
   * @param string $date
   *
   * @return self
   */
  public function setDate(string $date)
  {
    $this->date = $date;

    return $this;
  }


    /**
     * Get the value of Name Team Home
     *
     * @return int
     */
    public function getNameTeamHome()
    {
        return $this->name_team_home;
    }

    /**
     * Set the value of Name Team Home
     *
     * @param int $name_team_home
     *
     * @return self
     */
    public function setNameTeamHome($name_team_home)
    {
        $this->name_team_home = $name_team_home;

        return $this;
    }

    /**
     * Get the value of Name Team Away
     *
     * @return int
     */
    public function getNameTeamAway()
    {
        return $this->name_team_away;
    }

    /**
     * Set the value of Name Team Away
     *
     * @param int $name_team_away
     *
     * @return self
     */
    public function setNameTeamAway($name_team_away)
    {
        $this->name_team_away = $name_team_away;

        return $this;
    }

}
