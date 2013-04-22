<?php
// src/Zertz/LocationBundle/Entity/State.php
namespace Zertz\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use JMS\Serializer\Annotation AS JMS;

/**
 * @ORM\Table(name="Location__State")
 * @ORM\Entity(repositoryClass="Zertz\LocationBundle\Entity\Repository\StateRepository")
 */
class State
{
    /**
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue()
     */
    protected $id;

    /**
     * @ORM\Column(name="Name", type="string", length=200)
     */
    protected $name;
    
    /**
     * @Gedmo\Slug(fields={"name"}, updatable=true, unique=true, separator="-", style="default")
     * @ORM\Column(name="Slug", type="string", length=200)
     */
    private $slug;
    
    /**
     * @ORM\ManyToOne(targetEntity="Zertz\LocationBundle\Entity\Country")
     * @ORM\JoinColumn(name="Country_ID", referencedColumnName="ID", nullable=false)
     * @JMS\Exclude
     */
    protected $country;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return State
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get Name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return State
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }
    
    public function __toString() {
        return $this->name;
    }
}
?>