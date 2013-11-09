<?php

namespace Application\Service;
use Application\Model\DataBase as DataBaseModel;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Cms factory class
 */
class CmsFactory implements FactoryInterface
{

    public function createService (ServiceLocatorInterface $serviceLocator)
    {
        return new DataBaseModel($serviceLocator->get('doctrine.entitymanager.orm_default'));
    }
}