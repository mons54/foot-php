<?php

namespace Entities;

class Player extends Entity
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
   * @var string
   */
  protected $short_name;

  /**
   * @var string|null
   */
  protected $birthday_date;

  /**
   * @var string|null
   */
  protected $birthday_place;

  /**
   * @var int|null
   */
  protected $weight;

  /**
   * @var int|null
   */
  protected $size;

  /**
   * @var string|null
   */
  protected $nationality;

  /**
   * @var string|null
   */
  protected $poste;

  /**
   * @var string|null
   */
  protected $photo;

  /**
   * @var string|null
   */
  protected $link;

  /**
   * @var int|null
   */
  protected $number;

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
   * Get the value of Short Name
   *
   * @return string
   */
  public function getShortName():string
  {
    return $this->short_name;
  }

  /**
   * Set the value of Short Name
   *
   * @param string $short_name
   *
   * @return self
   */
  public function setShortName(string $short_name)
  {
    $this->short_name = $short_name;

    return $this;
  }

  /**
   * Get the value of Birthday Date
   *
   * @return string|null
   */
  public function getBirthdayDate():?string
  {
    return $this->birthday_date ? (new \DateTime($this->birthday_date))->format('d/m/Y') : null;
  }

  /**
   * Set the value of Birthday Date
   *
   * @param string|null $birthday_date
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
   * @param string|null $birthday_place
   *
   * @return self
   */
  public function setBirthdayPlace(?string $birthday_place)
  {
    $this->birthday_place = $birthday_place;

    return $this;
  }

  /**
   * Get the value of Weight
   *
   * @return int|null
   */
  public function getWeight():?int
  {
    return $this->weight;
  }

  /**
   * Set the value of Weight
   *
   * @param int|null $weight
   *
   * @return self
   */
  public function setWeight(?int $weight)
  {
    $this->weight = $weight;

    return $this;
  }

  /**
   * Get the value of Size
   *
   * @return int|null
   */
  public function getSize():?int
  {
    return $this->size;
  }

  /**
   * Set the value of Size
   *
   * @param int|null $size
   *
   * @return self
   */
  public function setSize(?int $size)
  {
    $this->size = $size;

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
   * Get the value of Poste
   *
   * @return string|null
   */
  public function getPoste():?string
  {
    return $this->poste;
  }

  /**
   * Set the value of Poste
   *
   * @param string|null $poste
   *
   * @return self
   */
  public function setPoste(?string $poste)
  {
    $this->poste = $poste;

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


  /**
   * Get the value of Number
   *
   * @return int|null
   */
  public function getNumber():?int
  {
    return $this->number;
  }

  /**
   * Set the value of Number
   *
   * @param int|null $number
   *
   * @return self
   */
  public function setNumber(?int $number)
  {
    $this->number = $number;

    return $this;
  }

}
