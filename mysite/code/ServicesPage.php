<?php

class ServicesPage extends Page {

    private static $db = array (
        'Section_title' => 'Varchar'
    );

    // disallow from SiteTree top level
    private static $can_be_root = false;

    private static $has_many = array (
        'Services' => 'ServicesPageObjects'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeFieldFromTab('Root.Main', 'Content');

        $fields->addFieldToTab('Root.Main', TextField::create(
            'Section_title',
            'Section Title'
        ));

        $fields->addFieldToTab('Root.Services', GridField::create(
            'Services',
            'List of all Services',
            $this->Services(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }

}

class ServicesPage_Controller extends Page_Controller {

}