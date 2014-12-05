<?php

namespace Lk\EntManipsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ExtendedType
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ExtendedType extends Type {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Tagada", mappedBy="type")
     */
    private $tagadas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="setDefault", type="boolean")
     */
    private $setDefault;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set setDefault
     *
     * @param boolean $setDefault
     * @return ExtendedType
     */
    public function setSetDefault($setDefault) {
        $this->setDefault = $setDefault;

        return $this;
    }

    /**
     * Get setDefault
     *
     * @return boolean
     */
    public function getSetDefault() {
        return $this->setDefault;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->tagadas = new ArrayCollection();
    }

    /**
     * Add tagadas
     *
     * @param Tagada $tagadas
     * @return ExtendedType
     */
    public function addTagada(Tagada $tagadas) {
        $this->tagadas[] = $tagadas;

        return $this;
    }

    /**
     * Remove tagadas
     *
     * @param Tagada $tagadas
     */
    public function removeTagada(Tagada $tagadas) {
        $this->tagadas->removeElement($tagadas);
    }

    /**
     * Get tagadas
     *
     * @return Collection
     */
    public function getTagadas() {
        return $this->tagadas;
    }

}
