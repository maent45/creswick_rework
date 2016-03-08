<?php

class BannerPage extends Page {

    private static $has_many = array (
        'BannerImages' => 'BannerPageObjects'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeFieldFromTab('Root.Main', 'Content');

        $fields->addFieldToTab('Root.Banners', GridField::create(
            'BannerImages',
            'Banner Images',
            $this->BannerImages(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }

}

class BannerPage_Controller extends Page_Controller {

}