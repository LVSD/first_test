<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadAdvert.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Image;
use OC\PlatformBundle\Entity\Category;

class LoadAdvert implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // $advert = new Advert();
    // $advert->setTitle("Recherche dev web");
    // $advert->setAuthor("Alexandre");
    // $advert->setContent("Nous recherchons un développeur Java sur Bali. Blabla…");
    // $advert->setPublished(1);
    // $advert->setImage(null);
    // $advert->setUpdatedAt(new \Datetime("2018-09-20 12:00:00"));
    // $advert->setNbApplications(0);
    // $advert->setSlug("");
    // $manager->persist($advert);

    // $advert = new Advert();
    // $advert->setTitle("Recherche standardiste");
    // $advert->setAuthor("Benoit");
    // $advert->setContent("Nous recherchons un standardiste sur Paris. Blabla…");
    // $advert->setPublished(1);
    // // Création de l'entité Image
    // $image = new Image();
    // $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
    // $image->setAlt('Job de rêve');
    // $advert->setImage($image);
    // $advert->setUpdatedAt(new \Datetime("2018-09-22 12:00:00"));
    // $advert->setNbApplications(0);
    // $advert->setSlug("");
    // $manager->persist($advert);

    // $advert = new Advert();
    // $advert->setTitle("Recherche developpeur php/mysql");
    // $advert->setAuthor("Lucie");
    // $advert->setContent("Nous recherchons un développeur php/mysql sur Lyon. Blabla…");
    // $advert->setPublished(1);
    // $advert->setImage(null);
    // $advert->setUpdatedAt(new \Datetime("2018-09-25 12:00:00"));
    // $advert->setNbApplications(0);
    // $advert->setSlug("");
    // $manager->persist($advert);

    // $advert = new Advert();
    // $advert->setTitle("Recherche dev web junior");
    // $advert->setAuthor("Jean-Pierre");
    // $advert->setContent("Nous recherchons un développeur web junior sur Orléans. Blabla…");
    // $advert->setPublished(1);
    // // Création de l'entité Image
    // $image = new Image();
    // $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
    // $image->setAlt('Job de rêve');
    // $advert->setImage($image);
    // $advert->setUpdatedAt(new \Datetime("2018-09-28 12:00:00"));
    // $advert->setNbApplications(0);
    // $advert->setSlug("");
    // $manager->persist($advert);

    // $advert = new Advert();
    // $advert->setTitle("Recherche développeur web");
    // $advert->setAuthor("Mathilde");
    // $advert->setContent("Nous recherchons un développeur web sur Barcelone. Blabla…");
    // $advert->setPublished(1);
    // $advert->setImage(null);
    // $advert->setUpdatedAt(new \Datetime("2018-10-01 12:00:00"));
    // $advert->setNbApplications(0);
    // $advert->setSlug("");
    // $manager->persist($advert);

    // $manager->flush();
    
  }
}

