<?php
namespace Pacificnm\Filter\View\Helper\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Pacificnm\Filter\view\Helper\Slugify;

class SlugifyFactory
{
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        
        $slugify = new \Pacificnm\Filter\Slugify();
        
        return new Slugify($slugify);
    }
}

