<?php

class ServicesPointsObjects extends DataObject {

    private static $db = array (
        'Service_covered' => 'Varchar',
        'SortOrder' => 'Int'
    );

    public static $default_sort = 'SortOrder';

    private static $has_one = array (
        'ServicesPageObjects' => 'ServicesPageObjects'
    );

    public function getCMSFields() {
        $fields = FieldList::create(
            TextField::create('Service_covered', 'Service Covered')
        );

        return $fields;
    }

    private static $summary_fields = array (
        'Service_covered' => 'Services Covered'
    );

}