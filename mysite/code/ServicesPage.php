<?php

class ServicesPage extends Page {

    private static $db = array (
        'Section_title' => 'Varchar'
    );

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

        $conf=GridFieldConfig_RelationEditor::create(10);
        $conf->addComponent(new GridFieldSortableRows('SortOrder'));

        $fields->addFieldToTab('Root.Services', GridField::create(
            'Services',
            'List of all Services',
            $this->Services(),
            $conf
        ));

        return $fields;
    }

}

class ServicesPage_Controller extends Page_Controller {

}