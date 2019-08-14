<?php 
	class ExtensionsMall_EmallFacebook_Block_facebook extends Mage_Core_Block_Template {
		function getSomething() {
			  return Mage::getModel('smdfacebook/salute')->getName();
		}	
		public function getFacebookConfig() {
			$facebookConfig = array();
			$facebookConfig['enabled'] = Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/enabled');
			$facebookConfig['facebook_feed'] = Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_feed');
            $facebookConfig['facebook_box_side'] = Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_box_side');
			$facebookConfig['facebook_box_top_position'] = Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_box_top_position');
			$facebookConfig['facebook_box_width'] = Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_box_width');
			$facebookConfig['facebook_box_height'] = Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_box_height');
			$facebookConfig['facebook_box_background'] = Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_box_background');
			$facebookConfig['facebook_theme'] = Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_theme');
            $facebookConfig['facebook_showfaces'] = Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_showfaces');
            $facebookConfig['facebook_datastream'] = Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_datastream');
            $facebookConfig['facebook_showborder'] = Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_showborder');
            $facebookConfig['facebook_dataheader'] = Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_dataheader');
            $facebookConfig['facebook_forcewall'] = Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_forcewall');

			return $facebookConfig;
		}
	}
?>