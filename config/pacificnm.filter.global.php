<?php
return array(
    'module' => array(
        'Filter' => array(
            'name' => 'Filter',
            'version' => '1.0.0',
            'install' => array(
                'require' => array()
            )
        )
    ),
    'service_manager' => array(
        'factories' => array(
            
        )
    ),
    'view_helpers' => array(
        'factories' => array(
            'Slugify' => 'Pacificnm\Filter\View\Helper\Factory\SlugifyFactory'
        )
    ),
);