<?php

namespace Lk\EntManipsBundle\Entity;

//sf_namespace LkEntManipsBundle:Codable

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Codable
 *
 * @ORM\MappedSuperclass
 */
class Codable extends Descriptable {

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=50)
     */
    private $code;

    /**
     * @var string
     *
     * @Gedmo\Slug(fields={"code"})
     * @ORM\Column(name="slug", type="string", length=128, unique=true)
     */
    private $slug;

    /**
     * Set code
     *
     * @param string $code
     * @return Codable
     */
    public function setCode($code) {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Codable
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
