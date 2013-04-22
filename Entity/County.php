<?php
// src/Zertz/LocationBundle/Entity/County.php
namespace Zertz\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Table(name="Location__County")
 * @ORM\Entity(repositoryClass="Zertz\LocationBundle\Entity\Repository\CountyRepository")
 */
class County
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
     * @ORM\ManyToOne(targetEntity="Zertz\LocationBundle\Entity\State")
     * @ORM\JoinColumn(name="State_ID", referencedColumnName="ID", nullable=false)
     */
    protected $state;
    
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
    
    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }
    
    public function __toString() {
        return $this->name;
    }
}
?>