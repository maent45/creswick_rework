<?php

class HomePage extends Page {

    // set allowed sub-page types
    private static $allowed_children = array (
        'BannerPage',
        'ServicesPage',
        'AboutPage'
    );

    private static $has_one = array (
        'Logo' => 'Image'
    );

    public function getCMSFields () {
        $fields = parent::getCMSFields();

        $fields->removeFieldFromTab('Root.Main','Content');
        $fields->addFieldToTab('Root.Logo', UploadField::create('Logo'));

        return $fields;
    }
}

class HomePage_Controller extends Page_Controller {

}