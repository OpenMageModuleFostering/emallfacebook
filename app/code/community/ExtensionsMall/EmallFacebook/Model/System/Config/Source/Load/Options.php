<?php

class ExtensionsMall_EmallFacebook_Model_System_Config_Source_Load_Options {

    public function toOptionArray() {
        return array(
            array('value' => 'left', 'label' => Mage::helper('emallfacebook')->__('Left')),
            array('value' => 'right', 'label' => Mage::helper('emallfacebook')->__('Right')),
        );
    }

}
