<?php 

$extensionKey = 'custom_bootstrap_theme';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey, 
    'Configuration\TSConfig\Include\BackendLayouts.txt', 
    'Custom Bootstrap Theme Backend Layouts'
);

?>