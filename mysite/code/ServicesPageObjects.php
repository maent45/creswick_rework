<?php

class ServicesPageObjects extends DataObject {

    private static $db = array (
        'Service_title' => 'Varchar',
        'Service_details' => 'HTMLText',
        'SortOrder' => 'Int'
    );

    public static $default_sort = 'SortOrder';

    private static $has_one = array (
        'ServicesPage' => 'ServicesPage'
    );

    private static $has_many = array (
        'ServicePoints' => 'ServicesPointsObjects'
    );

    public function getCMSFields() {
        $fields = new FieldList(new TabSet('Root'));

        $fields->addFieldToTab('Root.Main', TextField::create('Service_title', 'Service Title'));
        $fields->addFieldToTab('Root.Main', HtmlEditorField::create('Service_details', 'Service Details'));

        $conf=GridFieldConfig_RelationEditor::create(10);
        $conf->addComponent(new GridFieldSortableRows('SortOrder'));

        $fields->addFieldToTab('Root.Main', GridField::create(
            'ServicePoints',
            'Services Included',
            $this->ServicePoints(),
            $conf
        ));

        return $fields;
    }

    private static $summary_fields = array (
        'Service_title' => 'Service',
        'Service_details' => 'Details.Summary'
    );

}