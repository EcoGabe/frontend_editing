<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addStaticFile(
    'frontend_editing',
    'Configuration/TypoScript',
    'Frontend Editing'
);

ExtensionManagementUtility::addStaticFile(
    'frontend_editing',
    'Configuration/TypoScript/FluidStyledContent9',
    'Editable Fluid Styled Content v9'
);
