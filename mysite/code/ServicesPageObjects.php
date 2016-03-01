<?php

class ServicesPageObjects extends DataObject {

    private static $db = array (
        'Service_title' => 'Varchar',
        'Service_details' => 'HTMLText'
    );

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

        $fields->addFieldToTab('Root.Main', GridField::create(
            'ServicePoints',
            'Services Included',
            $this->ServicePoints(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }

    private static $summary_fields = array (
        'Service_title' => 'Service',
        'Service_details' => 'Details'
    );

}