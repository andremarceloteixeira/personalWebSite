<?php

namespace Application\Model;
use Application\Model\Core;

class Config {
  
    public function getCountryLangs() 
    {
        return array('PT', 'UK', 'DE');
    }
    
       
    public function getFileLangName ($local) 
    {
        switch ($local) {
            case 'DE' :
                $name = 'de_DE';
                break;
            case 'UK' :
                $name = 'en_US';
                break;
            default :
                $name = 'pt_BR';
                break;
        }
        return $name;
    }

}