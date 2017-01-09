<?php
namespace Pacificnm\Filter;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/pacificnm.filter.global.php';
    }
    
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/'
                )
            )
        );
    }
}

