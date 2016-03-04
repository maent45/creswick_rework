<?php

class AboutPage extends Page {

    private static $db = array (
        'Section_title' => 'Varchar'
    );

    private static $has_many = array (
        'AboutDetails' => 'AboutPageObjects'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeFieldFromTab('Root.Main', 'Content');

        $conf=GridFieldConfig_RelationEditor::create(10);
        $conf->addComponent(new GridFieldSortableRows('SortOrder'));

        $fields->addFieldToTab('Root.Main', TextField::create(
            'Section_title',
            'Section Title'
        ));

        $fields->addFieldToTab('Root.AboutUsDetails', GridField::create(
            'AboutDetails',
            'About Details',
            $this->AboutDetails(),
            $conf
        ));

        return $fields;
    }

}

class AboutPage_Controller extends Page_Controller {

}