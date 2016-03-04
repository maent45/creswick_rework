<?php

class HomePage extends Page {

    // set allowed sub-page types
    private static $allowed_children = array (
        'BannerPage',
        'ServicesPage',
        'AboutPage'
    );

    public function getCMSFields () {
        $fields = parent::getCMSFields();

        $fields->removeFieldFromTab('Root.Main','Content');

        return $fields;
    }

}

class HomePage_Controller extends Page_Controller {

}