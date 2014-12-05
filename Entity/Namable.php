<?php

namespace Lk\EntManipsBundle\Entity;

//sf_namespace LkEntManipsBundle:Namable

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Namable
 *
 * @ORM\MappedSuperclass
 */
class Namable extends Descriptable {

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(name="slug", type="string", length=128, unique=true)
     */
    private $slug;

    /**
     * Set name
     *
     * @param string $name
     * @return Namable
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Namable
     */
    public function setSlug($slug) {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug() {
        return $this->slug;
    }

}
