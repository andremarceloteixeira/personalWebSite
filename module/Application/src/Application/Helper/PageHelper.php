<?php

namespace Application\Helper;

use Zend\View\Helper\AbstractHelper;
use Application\Model\Config as ConfigModel;
use Zend\Session\Container as SessionContainer; // We need this when using sessions
class PageHelper extends AbstractHelper
{
     const ROCKET_INTERNET_ACRONYM = "RI";

    public $serviceLocator;
    protected  $configModel;


    public function __construct ($locator)
    {
       $this->serviceLocator = $locator;
       $this->configModel = new ConfigModel();
    }
    
    public function __invoke ()
    {     
        return $this;
    }
    public function getUrl($type = null, $path = null) 
    {
        if(!$this->getActiveCountry()) {
            $country = "pt";
        }else {
            $country =  strtolower($this->getActiveCountry()) ;
        }
        switch ($type) 
        {
            case 'image' :
                $url = $this->getHost() . '/assets/images/'. $path;
                break;
            case 'document' :
                $url = $this->getHost() . "/assets/documents/{$country}/". $path;
                break;
            default :
                $url = $this->getHost() . '/' .$path;
                break;
        }
        return $this->getProtocol(). '://' . $url;
    }
    
    public function getRequest() 
    {
        return $this->serviceLocator->get('request');
    }
    
    public function getActiveCountry () 
    {
        $session = new SessionContainer('initialized');
        return $session->country;
    }
    
    
    public function getHost() 
    {
       return $this->getRequest()->getUri()->getHost(); 
    }
      
    public function getProtocol() 
    {
       return $this->getRequest()->getUri()->getScheme(); 
    }
    
    public function getCountries() 
    {
       return $this->configModel->getCountryLangs();
    }
}