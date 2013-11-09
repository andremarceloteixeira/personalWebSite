<?php

namespace Application\Model;
use Application\Model\Core as CoreModel;

class DataBase extends CoreModel 
{
    
    protected function getRepository ($repository) 
    {
        return $this->getEntityManager()->getRepository($repository);
    }
}