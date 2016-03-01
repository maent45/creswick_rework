<?php

class BannerPageObjects extends DataObject {

    private static $db = array (
        'Banner_content' => 'HTMLText'
    );

    private static $has_one = array (
        'Banner_image' => 'image',
        'BannerPage' => 'BannerPage'
    );

    public function getCMSFields() {
        $fields = FieldList::create(
            $banner_img = UploadField::create('Banner_image', 'Banner Image'),
            HtmlEditorField::create('Banner_content', 'Banner Details')
        );

        $banner_img->setFolderName('banner-images');

        $banner_img->getValidator()->setAllowedExtensions(array(
            'png',
            'gif',
            'jpeg',
            'jpg',
            'svg'
        ));

        return $fields;
    }

}