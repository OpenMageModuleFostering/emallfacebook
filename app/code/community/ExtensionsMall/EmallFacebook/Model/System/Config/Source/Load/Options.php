<?php
class ExtensionsMall_EmallFacebook_Model_System_Config_Source_Load_Options {

	public function toOptionArray() {
		return array(
			array('value' => 1, 'label'=>Mage::helper('emallfacebook')->__('Left')),
			array('value' => 2, 'label'=>Mage::helper('emallfacebook')->__('Right')),
		);
	}
 }

 
 class ExtensionsMall_EmallFacebook_Model_System_Config_Source_Load_Theme {

	public function toOptionArray() {
		return array(
			array('value' => light, 'label'=>Mage::helper('emallfacebook')->__('Light')),
			array('value' => dark, 'label'=>Mage::helper('emallfacebook')->__('Dark')),
		);
	}
 }
 
  class ExtensionsMall_EmallFacebook_Model_System_Config_Source_Load_Faces {

	public function toOptionArray() {
		return array(
			array('value' => 1, 'label'=>Mage::helper('emallfacebook')->__('On')),
			array('value' => 2, 'label'=>Mage::helper('emallfacebook')->__('Off')),
		);
	}
 }
  
  class ExtensionsMall_EmallFacebook_Model_System_Config_Source_Load_Datastream {

	public function toOptionArray() {
		return array(
			array('value' => 1, 'label'=>Mage::helper('emallfacebook')->__('On')),
			array('value' => 2, 'label'=>Mage::helper('emallfacebook')->__('Off')),
		);
	}
 }
 
   class ExtensionsMall_EmallFacebook_Model_System_Config_Source_Load_Borders {

	public function toOptionArray() {
		return array(
			array('value' => 1, 'label'=>Mage::helper('emallfacebook')->__('On')),
			array('value' => 2, 'label'=>Mage::helper('emallfacebook')->__('Off')),
		);
	}
 }
 
   class ExtensionsMall_EmallFacebook_Model_System_Config_Source_Load_Dataheader {

	public function toOptionArray() {
		return array(
			array('value' => 1, 'label'=>Mage::helper('emallfacebook')->__('On')),
			array('value' => 2, 'label'=>Mage::helper('emallfacebook')->__('Off')),
		);
	}
 }
 
   class ExtensionsMall_EmallFacebook_Model_System_Config_Source_Load_Forcewall {

	public function toOptionArray() {
		return array(
			array('value' => 1, 'label'=>Mage::helper('emallfacebook')->__('On')),
			array('value' => 2, 'label'=>Mage::helper('emallfacebook')->__('Off')),
		);
	}
 }