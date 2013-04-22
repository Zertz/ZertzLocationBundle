<?php
namespace Zertz\LocationBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class CountyRepository extends EntityRepository
{
    public function findAll()
    {
        return $this->findBy(array(), array('name' => 'ASC'));
    }
}
