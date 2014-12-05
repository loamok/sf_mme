<?php

namespace Lk\EntManipsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"Type" = "Type", "ExtendedType" = "ExtendedType"})
 */
class Type extends Namable {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Plop", mappedBy="tagada")
     */
    private $plops;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->plops = new ArrayCollection();
    }

    /**
     * Add plops
     *
     * @param Plop $plops
     * @return Type
     */
    public function addPlop(Plop $plops) {
        $this->plops[] = $plops;

        return $this;
    }

    /**
     * Remove plops
     *
     * @param Plop $plops
     */
    public function removePlop(Plop $plops) {
        $this->plops->removeElement($plops);
    }

    /**
     * Get plops
     *
     * @return Collection
     */
    public function getPlops() {
        return $this->plops;
    }

}
