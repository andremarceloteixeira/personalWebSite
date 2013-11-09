<?php

namespace Application\Model;
use Application\Model\DataBase as DataBaseModel;

class Projects extends DataBaseModel {

    const TYPE_PROF = "profissional";
    const TYPE_ACADEMIC = "academic";
    const TYPE_FREE = "freelancer";
    
    public function getProjectByType($type) 
    {
        $criteria = array('type' => $type);
        return $this->getRepository('Application\Entity\Projects')->findBy($criteria);
    }
    
    public function getAllCompanys()
    {
        $company = $this->getRepository('Application\Entity\Company')->findAll();
        return $company;
    }

}