<?php 

defined('TYPO3_MODE') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants(vsprintf(
    'plugin.bootstrap_package.settings.scss.bootstrapPackageLessPath = "%s"',
    [
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('bootstrap_package', 'Resources/Public/Scss')
    ]
));

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source=FILE:EXT:custom_bootstrap_theme/Configuration/TSConfig/Page/frames.typoscript>'
);

?>