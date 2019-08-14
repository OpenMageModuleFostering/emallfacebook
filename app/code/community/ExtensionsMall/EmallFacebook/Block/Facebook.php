<?php

class ExtensionsMall_EmallFacebook_Block_Facebook extends Mage_Core_Block_Template {

    public function isEnabled() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/enabled');
    }

    public function getPageLink() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_feed');
    }

    public function getTabs() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_tabs');
    }

    public function getWidth() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_width');
    }

    public function getHeight() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_height');
    }

    public function getHideCover() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_hide_cover');
    }

    public function getShowPosts() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_show_posts');
    }

    public function getShowFaces() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_showfaces');
    }

    public function getSmallHeader() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_small_header');
    }

    public function getAdaptContainerWidth() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook/facebook_adapt_container_width');
    }

    /*      Get Style Settings      */

    public function getBoxTopPosition() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook_style/facebook_box_top_position');
    }

    public function getBoxSide() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook_style/facebook_box_side');
    }

    public function getBoxWidth() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook_style/facebook_box_width');
    }

    public function getBoxHeight() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook_style/facebook_box_height');
    }

    public function getBoxBackground() {
        return Mage::getStoreConfig('extensionsmall_emallfacebook/facebook_style/facebook_box_background');
    }

}
