<?php

class BannerPage extends Page {

    // disallow from SiteTree top level
    private static $can_be_root = false;

}

class BannerPage_Controller extends Page_Controller {

}