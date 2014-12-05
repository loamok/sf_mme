<?php

namespace Lk\EntManipsBundle\Entity;

//sf_namespace LkEntManipsBundle:Descriptable

use Doctrine\ORM\Mapping as ORM;

/**
 * Descriptable
 *
 * @ORM\MappedSuperclass
 */
class Descriptable extends Timestampable {

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * Set description
     *
     * @param string $description
     * @return Descriptable
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

}
