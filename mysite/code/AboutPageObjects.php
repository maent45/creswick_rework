<?php

class AboutPageObjects extends DataObject {

    private static $db = array (
        'Info_details' => 'HTMLText',
        'SortOrder' => 'Int'
    );

    public static $default_sort = 'SortOrder';

    private static $has_one = array (
        'AboutPage' => 'AboutPage',
        'Info_icon' => 'Image',
        'Info_image' => 'Image'
    );

    public function getCMSFields() {
        $fields = FieldList::create(
            $info_icon = UploadField::create('Info_icon', 'Icon'),
            HtmlEditorField::create('Info_details', 'Details'),
            $info_image = UploadField::create('Info_image', 'Image')
        );

        $info_icon->setFolderName('about-section-icons');
        $info_image->setFolderName('about-section-images');

        $info_icon->getValidator()->setAllowedExtensions(array(
            'png',
            'gif',
            'jpeg',
            'jpg',
            'svg'
        ));

        $info_image->getValidator()->setAllowedExtensions(array(
            'png',
            'gif',
            'jpeg',
            'jpg',
            'svg'
        ));

        return $fields;
    }

    public function getGridThumbnail() {
        if($this->Info_image()->exists()) {
            return $this->Info_image()->SetWidth(100);
        }

        return "(no image)";
    }

    private static $summary_fields = array (
        'Info_details.Summary' => 'Content',
        'GridThumbnail' => 'Image'
    );

}