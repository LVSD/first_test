<?php
// src/OC/PlatformBundle/Entity/AdvertSkill.php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="oc_advert_skill")
 */
class AdvertSkill
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="level", type="string", length=255)
   */
  private $level;

  /**
   * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Advert")
   */
  private $advert;
  //@ ORM \ Join Column(nullable=false, on Delete="CAS CADE")

  /**
   * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Skill") 
   */
  private $skill;
  //, orphanRemoval=true


  // ... vous pouvez ajouter d'autres attributs bien sûr

  /**
   * @return integer
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param string $level
   */
  public function setLevel($level)
  {
    $this->level = $level;
  }

  /**
   * @return string
   */
  public function getLevel()
  {
    return $this->level;
  }

  /**
   * @param Advert $advert
   */
  public function setAdvert(Advert $advert)
  {
    $this->advert = $advert;
  }

  /**
   * @return Advert
   */
  public function getAdvert()
  {
    return $this->advert;
  }

  /**
   * @param Skill $skill
   */
  public function setSkill(Skill $skill)
  {
    $this->skill = $skill;
  }

  /**
   * @return Skill
   */
  public function getSkill()
  {
    return $this->skill;
  }
}
