<?php

class AboutPage extends Page {

    private static $db = array (
        'Section_title' => 'Varchar'
    );

    private static $has_many = array (
        'AboutDetails' => 'AboutPageObjects'
    );

    // disallow from SiteTree top level
    private static $can_be_root = false;

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeFieldFromTab('Root.Main', 'Content');

        $fields->addFieldToTab('Root.Main', TextField::create(
            'Section_title',
            'Section Title'
        ));

        $fields->addFieldToTab('Root.AboutUsDetails', GridField::create(
            'AboutDetails',
            'About Details',
            $this->AboutDetails(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }

}

class AboutPage_Controller extends Page_Controller {

}