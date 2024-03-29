<?php

$adminVersion = Mage::getConfig()->getModuleConfig('Mage_Admin')->version;
if (version_compare($adminVersion, '1.6.1.2', '>=')) {

    $blockNames = array(
        'emallfacebook/facebook',
    );
    foreach ($blockNames as $blockName) {
        $whitelistBlock = Mage::getModel('admin/block')->load($blockName, 'block_name');
        $whitelistBlock->setData('block_name', $blockName);
        $whitelistBlock->setData('is_allowed', 1);
        $whitelistBlock->save();
    }

  /*  $variableNames = array(
        'design/email/logo_alt',
    );

    foreach ($variableNames as $variableName) {
        $whitelistVar = Mage::getModel('admin/variable')->load($variableName, 'variable_name');
        $whitelistVar->setData('variable_name', $variableName);
        $whitelistVar->setData('is_allowed', 1);
        $whitelistVar->save();
    }
 
   */
}