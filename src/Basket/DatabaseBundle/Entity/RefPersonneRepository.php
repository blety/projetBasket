<?php

namespace Basket\DatabaseBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of RefPersonneRepository
 *
 * @author usrlocal
 */
class RefPersonneRepository extends EntityRepository {
  
      public function selectArbitre(){
    $qb = $this->createQueryBuilder('a');
    $qb->where('a.type = :type')
              ->setParameter('type', "arbitre officiel");
                 
        return $qb->getQuery()->getResult();
  }
}
