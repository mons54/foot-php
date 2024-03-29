<?php

namespace Entities;

class Coach extends Entity
{
  /**
   * @var int
   */
  protected $id;

  /**
   * @var string
   */
  protected $name;

  /**
   * @var string|null
   */
  protected $birthday_date;

  /**
   * @var string|null
   */
  protected $birthday_place;

  /**
   * @var string|null
   */
  protected $nationality;

  /**
   * @var string|null
   */
  protected $photo;

  /**
   * @var string|null
   */
  protected $link;

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
   * Get the value of Name
   *
   * @return string
   */
  public function getName():string
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
   * Get the value of Birthday Date
   *
   * @return string|null
   */
  public function getBirthdayDate():?string
  {
    return $this->birthdayDate ? (new \DateTime($this->birthday_date))->format('d/m/Y') : null;
  }

  /**
   * Set the value of Birthday Date
   *
   * @param string|null $birthdayDate
   *
   * @return self
   */
  public function setBirthdayDate(?string $birthday_date)
  {
    if ($birthday_date) {
      $this->birthday_date = $birthday_date->format(self::DATE_FORMAT);
    }

    return $this;
  }

  /**
   * Get the value of Birthday Place
   *
   * @return string|null
   */
  public function getBirthdayPlace():?string
  {
    return $this->birthday_place;
  }

  /**
   * Set the value of Birthday Place
   *
   * @param string|null $birthdayPlace
   *
   * @return self
   */
  public function setBirthdayPlace(?string $birthday_place)
  {
    $this->birthday_place = $birthday_place;

    return $this;
  }

  /**
   * Get the value of Nationality
   *
   * @return string|null
   */
  public function getNationality():?string
  {
    return $this->nationality;
  }

  /**
   * Set the value of Nationality
   *
   * @param string|null $nationality
   *
   * @return self
   */
  public function setNationality(?string $nationality)
  {
    $this->nationality = $nationality;

    return $this;
  }

  /**
   * Get the value of Photo
   *
   * @return string|null
   */
  public function getPhoto():?string
  {
    return $this->photo;
  }

  /**
   * Set the value of Photo
   *
   * @param string|null $photo
   *
   * @return self
   */
  public function setPhoto(?string $photo)
  {
    $this->photo = $photo;

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
