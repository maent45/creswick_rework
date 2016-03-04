<?php
class CustomSiteConfig extends DataExtension {

    private static $db = array(
        'Phone_number' => 'Varchar',
        'Email' => 'Varchar'
    );

    private static $has_one = array (
        'Nav_logo' => 'Image'
    );

    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldToTab('Root.MenuBarSettings', TextField::create('Phone_number', 'Phone Number'));
        $fields->addFieldToTab('Root.MenuBarSettings', TextField::create('Email'));
        $fields->addFieldToTab('Root.MenuBarSettings', UploadField::create('Nav_logo', 'Logo'));
    }
}