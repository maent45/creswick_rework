<?php

class HomePage extends Page {

    // set allowed sub-page types
    private static $allowed_children = array (
        'BannerPage',
        'ServicesPage',
        'AboutPage'
    );

}

class HomePage_Controller extends Page_Controller {

}