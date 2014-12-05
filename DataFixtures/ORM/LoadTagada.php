<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lk\EntManipsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Lk\EntManipsBundle\Entity\Tagada;

/**
 * Description of LoadTagada
 *
 * @author symio
 */
class LoadTagada extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface {

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager Object manager
     *
     * @return void
     */
    public function load(ObjectManager $manager) {

        $tags = array(
            array(
                'Description' => "Tagada TVA",
                'Code' => "VAT",
                'Percentage' => 19.6,
                'Type' => $this->getReference('ExtType_tagada-type-a')
            ),
            array(
                'Description' => "Tagada codeur",
                'Code' => "Codeur",
                'Percentage' => 5,
                'Type' => $this->getReference('ExtType_tagada-type-b')
            ),
        );

        foreach ($tags as $aTagada) {
            $tagada = new Tagada();
            foreach ($aTagada as $propertie => $value) {
                $funcName = "set{$propertie}";
                $tagada->{$funcName}($value);
            }
            $manager->persist($tagada);
            $manager->flush();
            $this->addReference("Tag_" . $tagada->getSlug(), $tagada);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder() {
        return 3;
    }

}
