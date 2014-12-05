<?php

namespace Lk\EntManipsBundle\Entity;

//sf_namespace LkEntManipsBundle:Timestampable

use Doctrine\ORM\Mapping as ORM;

/**
 * Timestampable
 *
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks()
 */
class Timestampable {

    /**
     * @var DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="modified_at", type="datetime", nullable=true)
     */
    private $modifiedAt;

    /**
     * Set createdAt
     *
     * @param DateTime $createdAt
     * @return Timestampable
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return DateTime
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Set modifiedAt
     *
     * @param DateTime $modifiedAt
     * @return Timestampable
     */
    public function setModifiedAt($modifiedAt) {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * Get modifiedAt
     *
     * @return DateTime
     */
    public function getModifiedAt() {
        return $this->modifiedAt;
    }

    /**
     * @ORM\PrePersist
     */
    public function initDate() {
        $this->setCreatedAt(new \DateTime());
    }

    /**
     * @ORM\PreUpdate
     */
    public function updateDate() {
        $this->setUpdatedAt(new \Datetime());
    }

}
