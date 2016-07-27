<?php

namespace Application\Model;
use Application\Model\DataBase as DataBaseModel;
use Application\Entity\Reviews as RevEntity;

class Reviews extends DataBaseModel {
    
    public function getAllReviews()
    {
        $company = $this->getRepository('Application\Entity\Reviews')->findAll();
        return $company;
    }
    
    public function insertReview($name, $message) 
    {   
        $review = new RevEntity();
        $review->setName($name);
        $review->setMessage($message);

        $em = $this->getEntityManager();
        $em->persist($review);
        $em->flush();
    }
}