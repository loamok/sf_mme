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
use Lk\EntManipsBundle\Entity\Type;

/**
 * Description of LoadType
 *
 * @author symio
 */
class LoadType extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface {

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
                'Description' => "Plop Type A",
                'Name' => "Plop type A"
            ),
            array(
                'Description' => "Plop Type B",
                'Name' => "Plop type B"
            ),
        );

        foreach ($types as $aType) {
            $type = new Type();
            foreach ($aType as $propertie => $value) {
                $funcName = "set{$propertie}";
                $type->{$funcName}($value);
            }
            $manager->persist($type);
            $manager->flush();
            $this->addReference("Type_" . $type->getSlug(), $type);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder() {
        return 1;
    }

}
