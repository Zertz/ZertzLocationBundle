<?php
// src/Zertz/LocationBundle/Entity/Country.php
namespace Zertz\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Table(name="Location__Country")
 * @ORM\Entity(repositoryClass="Zertz\LocationBundle\Entity\Repository\CountryRepository")
 */
class Country
{
    /**
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue()
     */
    protected $id;

    /**
     * @ORM\Column(name="ISO", type="string", length=2)
     */
    protected $iso;

    /**
     * @ORM\Column(name="ISO3", type="string", length=3)
     */
    protected $iso3;

    /**
     * @ORM\Column(name="Name", type="string", length=100)
     */
    protected $name;
    
    /**
     * @Gedmo\Slug(fields={"name"}, updatable=true, unique=true, separator="-", style="default")
     * @ORM\Column(name="Slug", type="string", length=100)
     */
    private $slug;
    
    /**
     * @ORM\Column(name="Continent", type="string", length=5)
     */
    protected $continent;
    
    /**
     * @ORM\Column(name="Enabled", type="boolean")
     */
    protected $enabled;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function setIso($iso)
    {
        $this->iso = $iso;
        return $this;
    }

    public function getIso()
    {
        return $this->iso;
    }
    
    public function setIso3($iso3)
    {
        $this->iso3 = $iso3;
        return $this;
    }

    public function getIso3()
    {
        return $this->iso3;
    }
    
    /**
     * Set Name
     *
     * @param string $name
     * @return Country
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
     * @return Country
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

    /**
     * @param string $continent
     * @return Country
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;
        return $this;
    }

    /**
     * @return string
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * @param string $enabled
     * @return Country
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
    
    public function __toString() {
        return $this->name;
    }
}
?>