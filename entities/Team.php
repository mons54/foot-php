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
  protected $idStadium;

  /**
   * @var string
   */
  protected $name;

  /**
   * @var string
   */
  protected $shortName;

  /**
   * @var \DateTime
   */
  protected $fundationDate;

  /**
   * @var string
   */
  protected $president;

  /**
   * @var string
   */
  protected $adress;

  /**
   * @var string
   */
  protected $website;

  /**
   * @var string
   */
  protected $logo;

  /**
   * @var string
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
        return $this->idStadium;
    }

    /**
     * Set the value of Id Stadium
     *
     * @param int $idStadium
     *
     * @return self
     */
    public function setIdStadium(int $idStadium)
    {
        $this->idStadium = $idStadium;

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
        return $this->shortName;
    }

    /**
     * Set the value of Short Name
     *
     * @param string $shortName
     *
     * @return self
     */
    public function setShortName(string $shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get the value of Fundation Date
     *
     * @return DateTime
     */
    public function getFundationDate():\DateTime
    {
        return new \DateTime($this->fundationDate);
    }

    /**
     * Set the value of Fundation Date
     *
     * @param DateTime $fundationDate
     *
     * @return self
     */
    public function setFundationDate(\DateTime $fundationDate)
    {
        $this->fundationDate = $fundationDate;

        return $this;
    }

    /**
     * Get the value of President
     *
     * @return string
     */
    public function getPresident():string
    {
        return $this->president;
    }

    /**
     * Set the value of President
     *
     * @param string $president
     *
     * @return self
     */
    public function setPresident(string $president)
    {
        $this->president = $president;

        return $this;
    }

    /**
     * Get the value of Adress
     *
     * @return string
     */
    public function getAdress():string
    {
        return $this->adress;
    }

    /**
     * Set the value of Adress
     *
     * @param string $adress
     *
     * @return self
     */
    public function setAdress(string $adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of Website
     *
     * @return string
     */
    public function getWebsite():string
    {
        return $this->website;
    }

    /**
     * Set the value of Website
     *
     * @param string $website
     *
     * @return self
     */
    public function setWebsite(string $website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get the value of Logo
     *
     * @return string
     */
    public function getLogo():string
    {
        return $this->logo;
    }

    /**
     * Set the value of Logo
     *
     * @param string $logo
     *
     * @return self
     */
    public function setLogo(string $logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get the value of Link
     *
     * @return string
     */
    public function getLink():string
    {
        return $this->link;
    }

    /**
     * Set the value of Link
     *
     * @param string $link
     *
     * @return self
     */
    public function setLink(string $link)
    {
        $this->link = $link;

        return $this;
    }

}
