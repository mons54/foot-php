<?php

namespace Entities;

class Team extends Entity
{
  /**
   * @var int
   */
  protected $id;

  /**
   * @var int
   */
  protected $id_stadium;

  /**
   * @var string
   */
  protected $name;

  /**
   * @var string
   */
  protected $short_name;

  /**
   * @var string|null
   */
  protected $fundation_date;

  /**
   * @var string|null
   */
  protected $president;

  /**
   * @var string|null
   */
  protected $adress;

  /**
   * @var string|null
   */
  protected $website;

  /**
   * @var string|null
   */
  protected $logo;

  /**
   * @var string|null
   */
  protected $link;


  /**
   * Get the value of Id
   *
   * @return int
   */
  public function getId(): int
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
   * Get the value of Id Stadium
   *
   * @return int
   */
  public function getIdStadium(): int
  {
    return $this->id_stadium;
  }

  /**
   * Set the value of Id Stadium
   *
   * @param int $idStadium
   *
   * @return self
   */
  public function setIdStadium(int $id_stadium)
  {
    $this->id_stadium = $id_stadium;

    return $this;
  }

  /**
   * Get the value of Name
   *
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * Set the value of Name
   *
   * @param string $name
   *
   * @return self
   */
  public function setName(string $name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of Short Name
   *
   * @return string
   */
  public function getShortName():string
  {
    return explode('(', ucfirst(strtolower($this->short_name)))[0];
  }

  /**
   * Set the value of Short Name
   *
   * @param string $shortName
   *
   * @return self
   */
  public function setShortName(string $short_name)
  {
    $this->short_name = $short_name;

    return $this;
  }

  /**
   * Get the value of Fundation Date
   *
   * @return string|null
   */
  public function getFundationDate():?string
  {
    return $this->fundation_date ? (new \DateTime($this->fundation_date))->format('Y') : null;
  }

  /**
   * Set the value of Fundation Date
   *
   * @param string|null $fundationDate
   *
   * @return self
   */
  public function setFundationDate(?string $fundation_date)
  {
    if ($fundation_date) {
      $this->fundation_date = $fundation_date->format(self::DATE_FORMAT);
    }

    return $this;
  }

  /**
   * Get the value of President
   *
   * @return string|null
   */
  public function getPresident():?string
  {
    return $this->president;
  }

  /**
   * Set the value of President
   *
   * @param string|null $president
   *
   * @return self
   */
  public function setPresident(?string $president)
  {
    $this->president = $president;

    return $this;
  }

  /**
   * Get the value of Adress
   *
   * @return string|null
   */
  public function getAdress():?string
  {
    return $this->adress;
  }

  /**
   * Set the value of Adress
   *
   * @param string|null $adress
   *
   * @return self
   */
  public function setAdress(?string $adress)
  {
    $this->adress = $adress;

    return $this;
  }

  /**
   * Get the value of Website
   *
   * @return string|null
   */
  public function getWebsite():?string
  {
    return $this->website;
  }

  /**
   * Set the value of Website
   *
   * @param string|null $website
   *
   * @return self
   */
  public function setWebsite(?string $website)
  {
    $this->website = $website;

    return $this;
  }

  /**
   * Get the value of Logo
   *
   * @return string|null
   */
  public function getLogo():?string
  {
    return $this->logo;
  }

  /**
   * Set the value of Logo
   *
   * @param string|null $logo
   *
   * @return self
   */
  public function setLogo(?string $logo)
  {
    $this->logo = $logo;

    return $this;
  }

  /**
   * Get the value of Link
   *
   * @return string|null
   */
  public function getLink():?string
  {
    return $this->link;
  }

  /**
   * Set the value of Link
   *
   * @param string|null $link
   *
   * @return self
   */
  public function setLink(?string $link)
  {
    $this->link = $link;

    return $this;
  }

}
