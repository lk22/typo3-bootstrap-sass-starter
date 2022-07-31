<?php 
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Custom Bootstrap Theme',
    'description' => 'Extendable theme for Bootstrap Package',
    'category' => 'plugin',
    'state' => 'stable',
    'author' => 'Leo Knudsen',
    'author_email' => '',
    'author_company' => '',
    'version' => '1.0.0',
    'dependencies' => 'extbase,fluid',
    'clearCacheOnLoad' => '1',
    'constraints' => array(
        'depends' => array(
            'typo3' => '10.0.0-0.0.0',
            'bootstrap_package' => '11.0.0-0.0.0'
        )
    )
);
?>