<?php

namespace Application\Model;

use Zend\Filter\StripTags as FilterStrip;


abstract class Core
{
    protected $entityManager;

    public function __construct ($em)
    {
        $this->entityManager = $em->get('doctrine.entitymanager.orm_default');
    }
    
    protected function getEntityManager () 
    {
        return $this->entityManager;
    }
    
}