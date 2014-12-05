<?php

namespace Lk\EntManipsBundle\Entity;

//sf_namespace LkEntManipsBundle:Plop


use Doctrine\ORM\Mapping as ORM;

/**
 * Plop
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PlopRepository")
 */
class Plop extends Namable {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="Tagada", inversedBy="plops")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tagadas;

    /**
     * @ORM\ManyToOne(targetEntity="Type", inversedBy="plops")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal")
     */
    private $amount;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return Plop
     */
    public function setAmount($amount) {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Set type
     *
     * @param Type $type
     * @return Plop
     */
    public function setType(Type $type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return Type
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tagadas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tagadas
     *
     * @param \Lk\EntManipsBundle\Entity\Tagada $tagadas
     * @return Plop
     */
    public function addTagada(\Lk\EntManipsBundle\Entity\Tagada $tagadas)
    {
        $this->tagadas[] = $tagadas;

        return $this;
    }

    /**
     * Remove tagadas
     *
     * @param \Lk\EntManipsBundle\Entity\Tagada $tagadas
     */
    public function removeTagada(\Lk\EntManipsBundle\Entity\Tagada $tagadas)
    {
        $this->tagadas->removeElement($tagadas);
    }

    /**
     * Get tagadas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTagadas()
    {
        return $this->tagadas;
    }
}
