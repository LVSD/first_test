<?php
// src/OC/PlatformBundle/Purger/OCPurger.php

namespace OC\PlatformBundle\Purger;


use OC\PlatformBundle\Entity\Advert;


class OCPurger
{

  /**
   * Purge les applications inutiles de plus de $days jours
   *
   * @param integer $days
   * @return bool
   */
  public function purge($days, \Doctrine\ORM\EntityManager $em)
  {

    $listAdverts = $em->getRepository('OCPlatformBundle:Advert')->getAdvertsFromDays($days);

    foreach ($listAdverts as $advert) {
      if ($advert->getApplications()->isEmpty()) 
      {
        $em->remove($advert);
        $em->flush();
      }
    }      

    return true;
  }
}
