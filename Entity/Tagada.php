<?php

namespace Lk\EntManipsBundle\Entity;

//sf_namespace LkEntManipsBundle:Tagada

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Tagada
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TagadaRepository")
 */
class Tagada extends Codable {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="Plop", mappedBy="tagadas")
     */
    private $plops;

    /**
     * @ORM\ManyToOne(targetEntity="ExtendedType", inversedBy="tagadas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="percentage", type="decimal")
     */
    private $percentage;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set percentage
     *
     * @param string $percentage
     * @return Tagada
     */
    public function setPercentage($percentage) {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Get percentage
     *
     * @return string
     */
    public function getPercentage() {
        return $this->percentage;
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
     * @return Tagada
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

    /**
     * Set type
     *
     * @param \Lk\EntManipsBundle\Entity\ExtendedType $type
     * @return Tagada
     */
    public function setType(\Lk\EntManipsBundle\Entity\ExtendedType $type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Lk\EntManipsBundle\Entity\ExtendedType
     */
    public function getType() {
        return $this->type;
    }

}
