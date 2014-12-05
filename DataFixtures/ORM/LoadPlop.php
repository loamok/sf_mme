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
use Lk\EntManipsBundle\Entity\Plop;

/**
 * Description of LoadPlop
 *
 * @author symio
 */
class LoadPlop extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface {

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager Object manager
     *
     * @return void
     */
    public function load(ObjectManager $manager) {
//        return false;
        $plops = array(
            array(
                'Description' => "Plop premier",
                'Name' => "Plop 1",
                'Amount' => 50,
                'Tagada' => $this->getReference('Tag_vat'),
                'Type' => $this->getReference('Type_plop-type-a')
            ),
            array(
                'Description' => "Plop Second",
                'Name' => "Plop 2",
                'Amount' => 90,
                'Tagada' => $this->getReference('Tag_codeur'),
                'Type' => $this->getReference('Type_plop-type-b')
            ),
        );

        foreach ($plops as $aPlop) {
            $plop = new Plop();
            foreach ($aPlop as $propertie => $value) {
                if ($propertie != "Tagada") {
                    $funcName = "set{$propertie}";
                    $plop->{$funcName}($value);
                } else {
                    $plop->addTagada($value);
                }
            }
            $manager->persist($plop);
        }
        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder() {
        return 4;
    }

}
