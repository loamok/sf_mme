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
use Lk\EntManipsBundle\Entity\ExtendedType;

/**
 * Description of LoadExtendedType
 *
 * @author symio
 */
class LoadExtendedType extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface {

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager Object manager
     *
     * @return void
     */
    public function load(ObjectManager $manager) {

        $types = array(
            array(
                'Description' => "Tagada Type A",
                'Name' => "Tagada type A",
                'SetDefault' => true
            ),
            array(
                'Description' => "Tagada Type B",
                'Name' => "Tagada type B",
                'SetDefault' => false
            ),
        );

        foreach ($types as $aType) {
            $type = new ExtendedType();
            foreach ($aType as $propertie => $value) {
                $funcName = "set{$propertie}";
                $type->{$funcName}($value);
            }
            $manager->persist($type);
            $manager->flush();
//            echo "slug : ", $type->getSlug(), " ***\n";
            $this->addReference("ExtType_" . $type->getSlug(), $type);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder() {
        return 2;
    }

}
