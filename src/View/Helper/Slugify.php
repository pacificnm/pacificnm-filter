<?php
namespace Pacificnm\Filter\view\Helper;

use Zend\View\Helper\AbstractHelper;
use Pacificnm\Filter\Slugify;

class Slugify extends AbstractHelper
{
    /**
     * 
     * @var Slugify
     */
    protected $filter;
    
    /**
     * 
     * @param Slugify $slugify
     */
    public function __construct(Slugify $slugify)
    {
        $this->filter = $slugify;
    }
    
    /**
     * 
     * @param string $string
     * @return string
     */
    public function __invoke($string)
    {
        return $this->filter->slugify($string);
    }
}

