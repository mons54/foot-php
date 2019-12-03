<?php

namespace Entities;

class Stadium extends Entity
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
  protected $adress;

  /**
   * @var string|null
   */
  protected $tel;

  /**
   * @var int|null
   */
  protected $capacity;

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
     * Get the value of Tel
     *
     * @return string|null
     */
    public function getTel():?string
    {
      return $this->tel;
    }

    /**
     * Set the value of Tel
     *
     * @param string|null $tel
     *
     * @return self
     */
    public function setTel(?string $tel)
    {
      $this->tel = $tel;

      return $this;
    }

    /**
     * Get the value of Capacity
     *
     * @return int|null
     */
    public function getCapacity():?int
    {
      return $this->capacity;
    }

    /**
     * Set the value of Capacity
     *
     * @param int|null $capacity
     *
     * @return self
     */
    public function setCapacity(?int $capacity)
    {
      $this->capacity = $capacity;

      return $this;
    }

}
