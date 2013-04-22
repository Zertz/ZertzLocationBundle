<?php
// src/Zertz/LocationBundle/Entity/City.php
namespace Zertz\LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Table(name="Location__City")
 * @ORM\Entity(repositoryClass="Zertz\LocationBundle\Entity\Repository\CityRepository")
 */
class City
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
     * @ORM\Column(name="Latitude", type="decimal", precision=11, scale=7, nullable=true)
     */
    protected $latitude;

    /**
     * @ORM\Column(name="Longitude", type="decimal", precision=11, scale=7, nullable=true)
     */
    protected $longitude;

    /**
     * @ORM\Column(name="Timezone", type="string", length=40, nullable=true)
     */
    protected $timezone;
    
    /**
     * @ORM\ManyToOne(targetEntity="Zertz\LocationBundle\Entity\County")
     * @ORM\JoinColumn(name="County_ID", referencedColumnName="ID", nullable=true)
     */
    protected $county;
    
    /**
     * @ORM\ManyToOne(targetEntity="Zertz\LocationBundle\Entity\State")
     * @ORM\JoinColumn(name="State_ID", referencedColumnName="ID", nullable=true)
     */
    protected $state;
    
    /**
     * @ORM\ManyToOne(targetEntity="Zertz\LocationBundle\Entity\Country")
     * @ORM\JoinColumn(name="Country_ID", referencedColumnName="ID", nullable=false)
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
     * @return City
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
     * @return City
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }
    
    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }
    
    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
    
    public function getTimezone()
    {
        return $this->timezone;
    }

    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
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
    
    public function getCounty()
    {
        return $this->county;
    }

    public function setCounty($county)
    {
        $this->county = $county;
    }
    
    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
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